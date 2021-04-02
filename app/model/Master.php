<?php
namespace MyProject\Model;

use MyProject\Base\eloquent;

class Master extends eloquent{
    
    public function all($querys,$limit){

          $query=eloquent::mou($querys,$limit);
           
          //echo $query;
          
         /*$result = mysqli_query($this->getInstance(),$query);
          while($row=mysqli_fetch_assoc($result)) {       
            $list[] = array(
            'id_sahakorn'=>$row["id_sahakorn"], 
            'name_sahakorn'=>$row["name_sahakorn"], 
            'type' => $row["type"],  
            'province_sahakorn' => $row["province_sahakorn"],        
            'level'=>$row["level"]);
        
        return $list; 
        
          }*/
      }

    
    public function insert($query){
        
      mysqli_query($this->getInstance(),$query);
    
      
    }
    
    
    
}