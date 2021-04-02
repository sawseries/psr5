<?php

$html="<html xmlns='http://www.w3.org/1999/xhtml'>";
$html.="<head>";
$html.="<link rel='stylesheet' href='./public/asset/css/Master.css'>";
//$html.="<link rel='stylesheet' href='./public/asset/css/cadcase.css'>";
$html.="<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>";
$html.="<link rel='stylesheet' href='./public/asset/css/template.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>";
$html.="<script src='./public/asset/js/template.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>";
$html.="<script src='./public/asset/js/slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>";
$html.="<script src='./public/asset/js/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>";
$html.="<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
$html.="<title>รายงานแต่งตั้งผู้สอบบัญชี</title>";
$html.="</head>";
$html.="<body>";
$html.="<center>";
$html.="<img src='./public/asset/img/header_master.png' style='width:100%;'>";
$html.="</center>";
$html.="<nav class='navbar navbar-light bg-light'>";
$html.="<a class='navbar-brand' href=".$_SERVER['PHP_SELF'].">ระบบฐานข้อมูลควบคุมคุณภาพงานสอบบัญชี(caqc9)</a>";
       
        
$html.="</nav>";

define("HEADER", $html);