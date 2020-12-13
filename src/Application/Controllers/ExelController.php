<?php


namespace App\Application\Controllers;




use App\models\ExelModel;
use App\models\ExelObject;
use Psr\Container\ContainerInterface;

class ExelController
{
	protected $container;

	// constructor receives container instance
	public function __construct(ContainerInterface $container) {
		$this->container = $container;
	}

	public function uploadexelView($request, $response, $args)
	{
		$view = $this->container->get("view");

		return $view->render($response, 'exels/import_exel.html.twig', []);
	}

	public function processExel($request, $response, $args)
	{
		// directory where files needs to go
		$target_dir = './uploads/';
		$filename = explode(".", basename($_FILES["files"]['tmp_name']))[0] . ".csv";
		$target_file = $target_dir . basename($filename);
		move_uploaded_file($_FILES["files"]['tmp_name'], $target_file);

		return $response->withStatus(302)->withHeader('Location', '/');
	}


	public function allstorys($request, $response, $args){
		$storys = array();

		$view = $this->container->get("view");
		$files = scandir("uploads");
		// skip first results because they are a . and ..
		for($i = 2; $i < count($files)+2; $i++){
			$exel = new ExelModel("uploads/" . $files[$i], false);
			$storys[$i-2] = $exel->getFiledata()[0];
		}
		echo $storys[1][0];

		return $view->render($response, 'exels/allStorys.html.twig', []);
	}









}