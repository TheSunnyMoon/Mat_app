<?php

require_once __DIR__ . '/database.php';

function registerUser($request, $response, $args) {
    $data = $request->getParsedBody();

    // Vérification simple des champs requis
    if (!isset($data['username'], $data['email'], $data['password'])) {
        $error = ['error' => 'Missing required fields'];
        $response->getBody()->write(json_encode($error));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(400);
    }

    $username = $data['username'];
    $email = $data['email'];
    $password = password_hash($data['password'], PASSWORD_BCRYPT);

    try {
        $pdo = getDB();

        // Vérifier si l'email existe déjà
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetchColumn() > 0) {
            $error = ['error' => 'Email already registered'];
            $response->getBody()->write(json_encode($error));
            return $response->withHeader('Content-Type', 'application/json')->withStatus(409);
        }

        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $password]);

        $success = ['message' => 'User registered successfully'];
        $response->getBody()->write(json_encode($success));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
    } catch (Exception $e) {
        $error = ['error' => 'Database error: ' . $e->getMessage()];
        $response->getBody()->write(json_encode($error));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(500);
    }
}

function loginUser($request, $response, $args) {
    $data = $request->getParsedBody();

    if (!isset($data['email'], $data['password'])) {
        $error = ['error' => 'Missing required fields'];
        $response->getBody()->write(json_encode($error));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(400);
    }

    $email = $data['email'];
    $password = $data['password'];

    try {
        $pdo = getDB();

        $stmt = $pdo->prepare("SELECT id, username, email, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user || !password_verify($password, $user['password'])) {
            $error = ['error' => 'Invalid email or password'];
            $response->getBody()->write(json_encode($error));
            return $response->withHeader('Content-Type', 'application/json')->withStatus(401);
        }

        // Optionnel : générer un token ou autre méthode d'authentification
        $success = ['message' => 'Login successful', 'user' => $user];
        unset($success['user']['password']); // Ne pas renvoyer le mot de passe
        $response->getBody()->write(json_encode($success));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    } catch (Exception $e) {
        $error = ['error' => 'Database error: ' . $e->getMessage()];
        $response->getBody()->write(json_encode($error));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(500);
    }
}
