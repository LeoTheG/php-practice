<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'functions.php';

$pdo = Connection::make();
$query = new QueryBuilder($pdo);
$users = $query->selectAll('users');
// queries by ID
$user = $query->selectUserByID('2');


?>