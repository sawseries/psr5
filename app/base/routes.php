<?php


namespace MyProject\Base;

use MyProject\controller\MasterController;

class routes{
    
    private $_listUri = array();
    private $_listCall = array();

    public function add($uri, $function)
    {
        $this->_listUri[] = $uri;
        $this->_listCall[] = $function;
    }

    public function submit($controllers,$action)
    {
       foreach ($this->_listUri as $listKey => $listUri) {
            $controller = $this->_listUri[$listKey]."Controller";
            $action = $this->_listCall[$listKey];
           // require_once('./app/route.php');
            
            //echo $controllers;

            $controllers = new M();
            $controllers->$action();
        }
    }
    
}

//namespace MyModel; 

//class Routes
//{
    //private $_listUri = array();
    //private $_listCall = array();

   /* public function add($uri, $function)
    {
        $this->_listUri[] = $uri;
        $this->_listCall[] = $function;
    }*/
   // public function test(){
     //   echo "test";
    //}

    /*public function submit()
    {
        foreach ($this->_listUri as $listKey => $listUri) {
            $controller = $this->_listUri[$listKey]."Controller";
            $action = $this->_listCall[$listKey];
   
            echo $controller;         
            //require_once('./Controller/'.$this->_listUri[$listKey].'_Controller.php');
   
            //$controllers = new $controller();
            //$controllers->$action();
        }
    }*/
//}

?>