<?php

date_default_timezone_set('Asia/Bangkok');
header('HTTP/1.1 200 OK');
ob_start();



$controller;
$action;

if(isset($_GET['controller'])&&isset($_GET['action'])){
    $controller = $_GET['controller'];
    $action = $_GET['action'];   
}else{
    $controller="Master";
    $action="index"; 
}
