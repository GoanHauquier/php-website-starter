<?php
include_once 'functions.php';
include_once 'env.php';
include_once 'App/Require.php';

/**
 * Initialize the router
 */
require_once 'App/Router.php';
use App\Router;

$router = new Router;
$controllerPath = $router->initialize();

$router->startPageInitialization($controllerPath);