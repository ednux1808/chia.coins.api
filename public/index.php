<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

#Home api
$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

#Route storages
$app->get('/storages', function (Request $request, Response $response){
    $response->getBody()->write("Storages");
    return $response;
});

#Route pilots
$app->get('/pilots', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Pilots");
    return $response;
});

#Route pilots for storage
$app->get('/pilots/storage/<:id_storage>', function (Request $request, Response $response, $args) {
   $response->getBody()->write("Pilots for storages");
   return $response;
});



$app->run();