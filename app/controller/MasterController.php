<?php

namespace MyProject\controller;

use MyProject\Base\BaseController;
use MyProject\Model\Master;
use MyProject\Base\Redirect;
use MyProject\Base\Controllers;

class MasterController extends BaseController{
    

    public function __construct() {
             
    }

     public function index(){
         
        $query ="SELECT * FROM vdo_view"; 
        $list = Master::all($query,10);   
        $links = Master::get_links();    
        Redirect::view("auth/login",array("list"=>$list,"links"=>$links));
    }
    
}
