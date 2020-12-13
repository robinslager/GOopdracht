<?php

use App\Application\Controllers\HomeController;
use Bas\Application\Middleware\SessionMiddleware;
use Psr\Container\ContainerInterface;
use Bas\Application\Factories\LoggerFactory;
use Slim\Views\Twig;
use Monolog\Logger;
use Dotenv\Dotenv;

$container = $app->getContainer();

$env = Dotenv::createImmutable(__DIR__);
$env->load();

// Set view in Container
$container->set('view', function() {
    $twig = Twig::create(
                __DIR__ . '/../src/Views',
                ['cache' => __DIR__ . '/cache', 'debug' => true]
            );

    // $twig->getEnvironment()->addGlobal('ROOT_URL', __DIR__ . '/public/assets/');

    return $twig;
});

// Logging
$container->set(LoggerFactory::class, function(ContainerInterface $container) {

    // Logger settings
    $settings = [
        'name' => 'app',
        'path' => __DIR__ . '/logs',
        'filename' => 'app.log',
        'level' => Logger::DEBUG,
        'file_permission' => 0775,
    ];

    $logger = new LoggerFactory($settings);
    $logger
        ->addFileHandler($settings['filename'])
        ->createInstance($settings['name']);

    return $logger;
});

// Controller for the homepage
$container->set('HomeController', function(ContainerInterface $container) {
    return new HomeController(
	        $container->get("view")
            );
});




