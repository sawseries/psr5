<?php

date_default_timezone_set('Asia/Bangkok');
header('HTTP/1.1 200 OK');
ob_start();
require_once './app/base/index.php';
require_once './Autoload.php';
require_once './Application/View.php';
require_once './Application/Link.php';
require_once './Application/Helpper/Global.php';
require_once './Application/Redirect.php';
require_once './Application/Render.php';
require_once './Application/Role.php';
require_once './Application/Template/Header.php';
require_once './Application/Template/Footer.php';
require_once './Application/Template/path.php';
require_once './Application/Controllers.php';
require_once './Application/eloquent.php';
//require_once('./ApplicationLayer/Mpdf/mpdf.php');
//require_once('./Applicationlayer/tcpdf/tcpdf/tcpdf.php');
//require_once('./Applicationlayer/tcpdf/tcpdf/class/class_curl.php');
require_once './Application/routes.php';
require_once './Application/BaseController.php';
require_once './Application/index.php';



?>