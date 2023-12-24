<?php

$router->get('/jobplatform/public/','controllers/home.php');
$router->get('/jobplatform/public/listings','controllers/listings/index.php');
$router->get('/jobplatform/public/listings/create','controllers/listings/create.php');
