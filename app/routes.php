<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use App\Application\Controllers\ExelController;
use App\Application\Controllers\HomeController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

	$app->get('/', HomeController::class . ':home');
	$app->get('/exel/importstory', ExelController::class . ':uploadexelView');
	$app->post('/exel/processexel', ExelController::class . ':processExel')->setName('processExel');
	$app->get('/exel/storys', ExelController::class . ':allstorys')->setName('exelstorys');

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
