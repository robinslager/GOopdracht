<?php


use Bas\Application\Middleware\SessionMiddleware;
use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use App\Application\Controllers\HomeController;
use Bas\Application\Factories\LoggerFactory;
use Psr\Log\LoggerInterface;
use Slim\Views\Twig;
use Monolog\Logger;
use Dotenv\Dotenv;

$container = $app->getContainer();

$env = Dotenv::createImmutable(__DIR__);
$env->load();

// Set view in Container
$container->set('view', function() {
    $twig = Twig::create(
                __DIR__ . '../src/Views',
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
$container = $app->getContainer();

$container->set('HomeController', function (ContainerInterface $container) {
	// retrieve the 'view' from the container
	$view = $container->get('view');

	return new HomeController($view);
});

return function (ContainerBuilder $containerBuilder) {
	$containerBuilder->addDefinitions([
		LoggerInterface::class => function (ContainerInterface $c) {
			$settings = $c->get('settings');

			$loggerSettings = $settings['logger'];
			$logger = new Logger($loggerSettings['name']);

			$processor = new UidProcessor();
			$logger->pushProcessor($processor);

			$handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
			$logger->pushHandler($handler);

			return $logger;
		},
	]);
};





