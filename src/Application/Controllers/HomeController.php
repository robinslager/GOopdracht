<?php


namespace App\Application\Controllers;


use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\Twig;

class HomeController
{
	protected $container;

	// constructor receives container instance
	public function __construct(ContainerInterface $container) {
		$this->container = $container;
	}

	public function home($request, $response, $args) {
		$view = $this->container->get("view");
		// your code
		// to access items in the container... $this->container->get('');

		return $view->render($response, 'indexPage/home.html.twig', []);
	}

	public function contact($request, $response, $args) {
		// your code
		// to access items in the container... $this->container->get('');
		return $response;
	}
}