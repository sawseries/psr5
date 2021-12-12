<?php

date_default_timezone_set('Asia/Bangkok');
header('HTTP/1.1 200 OK');
ob_start();
require __DIR__ . './../vendor/autoload.php';
require __DIR__ . './../app/route.php';


use MyProject\controller\MasterController as master;
use MyProject\controller\UserController as User;

$route = new master();

switch($controller){
    
    case 'Master' : $route = new Master();
        break;
    case 'User' :  $route = new User();
        break;
}



$route->$action();



