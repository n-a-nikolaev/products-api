<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


require '../src/class/db.class';
require '../vendor/autoload.php';

$app = new \Slim\App;

require '../src/routes/groups.php';
require '../src/routes/products.php';

$app->run();
