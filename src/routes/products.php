<?php

header("Access-Control-Allow-Origin: *");

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/products', function (Request $request, Response $response) {
    $return = array();
    $return['success'] = false;

    $db = new DB();
    $db->connect();

    $query = 'SELECT * FROM `products`';
    $result = $db->select($query);

    if (count($result)) {
        $return['data'] = $result;
        $return['success'] = true;
    }

    echo json_encode($return);
    exit();
});

$app->get('/products/{id}', function (Request $request, Response $response) {
    $id = $request->getAttribute('id');
    
    $return = array();
    $return['success'] = false;

    $db = new DB();
    $db->connect();

    $query = 'SELECT * FROM `products` WHERE id=' . $id;
    $result = $db->select($query);

    if (count($result)) {
        $return['data'] = $result;
        $return['success'] = true;
    }

    echo json_encode($return);
    exit();
});

$app->get('/products/group/{id}', function (Request $request, Response $response) {
    $id = $request->getAttribute('id');
    
    $return = array();
    $return['success'] = false;

    $db = new DB();
    $db->connect();

    $query = 'SELECT * FROM `products` WHERE groupId=' . $id;
    $result = $db->select($query);

    if (count($result)) {
        $return['data'] = $result;
        $return['success'] = true;
    }

    echo json_encode($return);
    exit();
});