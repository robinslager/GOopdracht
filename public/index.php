<?php

use App\Application\Handlers\HttpErrorHandler;
use App\Application\Handlers\ShutdownHandler;
use DI\ContainerBuilder;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;
use Slim\ResponseEmitter;
use Slim\Views\TwigMiddleware;
use Bas\Application\Middleware\SessionMiddleware;
use Slim\Exception\NotFoundException;
use Dotenv\Dotenv;

require __DIR__ . './../vendor/autoload.php';
require_once __DIR__ . './../app/routes.php';


// Instantiate PHP-DI ContainerBuilder
$containerBuilder = new ContainerBuilder();

if (false) { // Should be set to true in production
	$containerBuilder->enableCompilation(__DIR__ . '/../var/cache');
}

//set up the container
$container = new \DI\Container();
AppFactory::setContainer($container);

//create the app
$app = AppFactory::create();
//TODO turn off on production
$app->setBasePath("./");


$env = Dotenv::createImmutable(__DIR__);
$env->load();

//register dependencies
require_once __DIR__ . '\dependencies.php';

$app->add(TwigMiddleware::createFromContainer($app));

$callableResolver = $app->getCallableResolver();
// Register middleware
$middleware = require __DIR__ . '/../app/middleware.php';
$middleware($app);


// Add Routing Middleware
$app->addRoutingMiddleware();

// Add Error Middleware
$errorMiddleware = $app->addErrorMiddleware(true, false, false);
$errorMiddleware->setDefaultErrorHandler($errorHandler);


$app = AppFactory::create();

// Register routes
$routes = require __DIR__ . '/../app/routes.php';
$routes($app);


// Create Request object from globals
$serverRequestCreator = ServerRequestCreatorFactory::create();
$request = $serverRequestCreator->createServerRequestFromGlobals();

// Create Error Handler
$responseFactory = $app->getResponseFactory();
$errorHandler = new HttpErrorHandler($callableResolver, $responseFactory);



// Run App & Emit Response
$response = $app->handle($request);
$responseEmitter = new ResponseEmitter();
$responseEmitter->emit($response);



