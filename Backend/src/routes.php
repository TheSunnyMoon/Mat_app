<?php

// Rendre la variable $app accessible ici
global $app;

require_once __DIR__ . '/Controllers.php';

// Définir les routes API
$app->post('/register', 'registerUser');  // Pour enregistrer un utilisateur
$app->post('/login', 'loginUser');        // Pour la connexion

// Route de test pour vérifier que Slim fonctionne
$app->get('/test', function ($request, $response, $args) {
    $response->getBody()->write(json_encode(['message' => 'Test OK']));
    return $response->withHeader('Content-Type', 'application/json');
});
