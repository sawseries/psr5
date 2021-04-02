<?php

namespace MyProject\controller;

use MyProject\Base\BaseController;
use MyProject\Base\Redirect;
use MyProject\Model\Master;
use MyProject\Base\Controllers;

class MasterController extends BaseController{
    

    public function __construct() {
             
    }

     public function index(){
         
        $query ="SELECT * FROM m004_imei_item"; 
        $list = Master::all($query,10);   
        $links = Master::get_links();    
        Redirect::view("Master/index",array("list"=>$list,"links"=>$links));
    }
    
}
