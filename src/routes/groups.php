<?php

header("Access-Control-Allow-Origin: *");

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/groups', function (Request $request, Response $response) {
    $return = array();
    $return['success'] = false;

    $db = new DB();
    $db->connect();

    $query = 'SELECT * FROM `groups`';
    $result = $db->select($query);

    if (count($result)) {
        $return['data'] = $result;
        $return['success'] = true;
    }

    echo json_encode($return);
    exit();
});
