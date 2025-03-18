<?php
// backend/public/index.php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$app->addBodyParsingMiddleware();

// Add CORS middleware here - ADD THIS NEW SECTION
$app->add(function ($request, $handler) {
    $response = $handler->handle($request);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});



// Handle OPTIONS requests - ADD THIS NEW SECTION
$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

/**
 * Fonction permettant d'obtenir une instance PDO pour se connecter à la base MySQL.
 * Les variables d'environnement DB_HOST, DB_NAME, DB_USER et DB_PASSWORD doivent être définies.
 */
function getPDO() {
    static $pdo;
    if (!$pdo) {
        $dbHost = getenv('DB_HOST') ?: 'db';
        $dbName = getenv('DB_NAME') ?: 'userdb';
        $dbUser = getenv('DB_USER') ?: 'user';
        $dbPass = getenv('DB_PASSWORD') ?: 'usrpass';
        $dsn = "mysql:host={$dbHost};dbname={$dbName};charset=utf8mb4";
        try {
            $pdo = new PDO($dsn, $dbUser, $dbPass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
    return $pdo;
}


$app->get('/api/swagger.json', function(Request $request, Response $response) {
    $jsonFile = __DIR__ . '/../docs/swagger.json';
    $jsonData = file_get_contents($jsonFile);
    
    $response->getBody()->write($jsonData);
    return $response->withHeader('Content-Type', 'application/json');
});

// Add a docs route to serve Swagger UI
$app->get('/docs', function(Request $request, Response $response) {
    $html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mat_App API Documentation</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swagger-ui-dist@5.11.0/swagger-ui.css" />
  <style>
    html { box-sizing: border-box; overflow: -moz-scrollbars-vertical; overflow-y: scroll; }
    *, *:before, *:after { box-sizing: inherit; }
    body { margin: 0; background: #fafafa; }
  </style>
</head>
<body>
  <div id="swagger-ui"></div>
  <script src="https://cdn.jsdelivr.net/npm/swagger-ui-dist@5.11.0/swagger-ui-bundle.js" charset="UTF-8"> </script>
  <script src="https://cdn.jsdelivr.net/npm/swagger-ui-dist@5.11.0/swagger-ui-standalone-preset.js" charset="UTF-8"> </script>
  <script>
    window.onload = function() {
      const ui = SwaggerUIBundle({
        url: "/api/swagger.json",
        dom_id: '#swagger-ui',
        deepLinking: true,
        presets: [
          SwaggerUIBundle.presets.apis,
          SwaggerUIStandalonePreset
        ],
        layout: "StandaloneLayout"
      });
      window.ui = ui;
    };
  </script>
</body>
</html>
HTML;
    
    $response->getBody()->write($html);
    return $response->withHeader('Content-Type', 'text/html');
});

$app->get('/api/debug/table', function(Request $request, Response $response, $args) {
    $pdo = getPDO();
    try {
        $stmt = $pdo->prepare("DESCRIBE users");
        $stmt->execute();
        $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $payload = json_encode([
            'success' => true,
            'columns' => $columns
        ]);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    } catch (PDOException $e) {
        $payload = json_encode([
            'success' => false,
            'message' => $e->getMessage()
        ]);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json')->withStatus(500);
    }
});

// --- Route pour l'inscription d'un nouvel utilisateur ---
$app->post('/api/register', function(Request $request, Response $response, $args) {
    $data = $request->getParsedBody();
    if (!isset($data['username'], $data['email'], $data['password'])) {
        $payload = json_encode([
            'success' => false,
            'message' => 'Champs requis manquants'
        ]);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json')->withStatus(400);
    }

    $username = $data['username'];
    $email = $data['email'];
    // Hachage du mot de passe pour la sécurité
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    $pdo = getPDO();

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $password
        ]);
        $payload = json_encode([
            'success' => true,
            'message' => 'Utilisateur enregistré avec succès'
        ]);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
    } catch (PDOException $e) {
        // Gestion de l'erreur si l'email existe déjà (code 23000)
        $errorMessage = $e->getCode() == 23000 ? "Cet email est déjà utilisé" : $e->getMessage();
        $payload = json_encode([
            'success' => false,
            'message' => $errorMessage
        ]);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json')->withStatus(400);
    }
});

// --- Route pour la connexion d'un utilisateur ---
$app->post('/api/connect', function(Request $request, Response $response, $args) {
    $data = $request->getParsedBody();
    if (!isset($data['email'], $data['password'])) {
        $payload = json_encode([
            'success' => false,
            'message' => 'Champs requis manquants'
        ]);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json')->withStatus(400);
    }

    $email = $data['email'];
    $password = $data['password'];
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Authentification réussie
        $payload = json_encode([
            'success' => true,
            'message' => 'Connexion réussie',
            'user' => [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email']
            ]
        ]);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    } else {
        $payload = json_encode([
            'success' => false,
            'message' => 'Identifiants invalides'
        ]);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json')->withStatus(401);
    }
});

$app->run();
