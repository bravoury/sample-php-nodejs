<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require 'vendor/autoload.php';

$app = new \Slim\App;
$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer('templates/');

$app->get('/', function (Request $request, Response $response, array $args) {
  $response = $this->view->render($response, 'application.phtml', []);
  return $response;
});

$app->run();
