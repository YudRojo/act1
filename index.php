<?php
require 'vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->get('/clima/json', function (Request $request, Response $response, array $args) {
    $data = array ('name'=>'Judith Jimenez', 'cuenta' => 416018673);
    

    return $response ->withJson ($data);
});
$app->run();