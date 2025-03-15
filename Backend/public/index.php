<?php

use Slim\Factory\AppFactory;
use Slim\Middleware\ErrorMiddleware;

require __DIR__ . '/vendor/autoload.php';

// Créer l'application Slim
$app = AppFactory::create();

// Ajouter le middleware pour parser le corps des requêtes (pour JSON)
$app->addBodyParsingMiddleware();

// Ajouter un middleware pour gérer les erreurs (mode développement ici)
$errorMiddleware = new ErrorMiddleware(
    $app->getCallableResolver(),
    $app->getResponseFactory(),
    true,  // afficher les erreurs (mode dev)
    true,
    true
);
$app->add($errorMiddleware);

// Charger les routes (le fichier doit utiliser la variable globale $app)
require __DIR__ . '/src/routes.php';

// Lancer l'application Slim
$app->run();
