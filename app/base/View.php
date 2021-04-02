<?php
namespace MyProject\base;
class View {

    private $data = array();
    private $render = FALSE;

    public  function __construct($template) {        
       $file = './app/view/'.$template.'.php';  
        if (file_exists($file)) {                                
                $this->render = $file;             
            } else {
                echo ('Template '.$template.' not found!');
            }
    }
   
    public function assign($variable, $value) {
        $this->data[$variable] = $value;
     
    }

    public function __destruct() {
        extract($this->data);
        include($this->render);
    }

}
