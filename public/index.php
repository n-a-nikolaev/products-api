<?php

require '../src/class/db.class';
require '../src/class/helper.class';
require '../vendor/autoload.php';

$app = new \Slim\App;

require '../src/routes/groups.php';
require '../src/routes/products.php';

$app->run();
