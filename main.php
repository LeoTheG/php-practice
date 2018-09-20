<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';

$pdo = Connection::make();
$query = new QueryBuilder($pdo);
$users = $query->selectAll('users');
// queries by ID
$person = $query->selectUserByID('2');

$router = new Router;


require 'views/routes.php';
require $router->direct('about');


?>