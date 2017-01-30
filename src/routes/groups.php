<?php

header("Access-Control-Allow-Origin: *");

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/groups', function (Request $request, Response $response) {
    $db = new DB();
    $db->connect();

    $query = 'SELECT * FROM `groups`';
    $result = $db->select($query);

    Helper::process_results($result);
});

$app->get('/groups/{id}', function (Request $request, Response $response) {
    $id = $request->getAttribute('id');

    $db = new DB();
    $db->connect();

    $query = 'SELECT * FROM `groups` WHERE id=' . $id;
    $result = $db->select($query);

    Helper::process_results($result);
});
