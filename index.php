<?php

require_once __DIR__.'/vendor/autoload.php';

use App\ApiRequset;
use App\UserMapper;

ini_set('display_error', 1);


$apiRequest = new ApiRequset('https://jsonplaceholder.typicode.com');
$mapper = new UserMapper($apiRequest);

$user = $mapper->findById(1);

var_dump($user);

