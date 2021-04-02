<?php
namespace MyProject\Base;

use MyProject\Base\Connection;

class Controllers extends Connection{
    
    public static $limit;
    public static $links;
    
    

    public function mou($query,$limit){
 
          $page=1;        
          if(isset($_GET["page"])){ 
          $page=$_GET["page"];}
          
          $start=(($page-1)*$limit)+1;
          $end = $limit;          
          Controllers::set_links(self::get_path(),$query,$page,$limit); 
          $result = $query.=" "."limit $start,$end";
          
          return $result;             
    }
    
    public function get_path(){
         
          $controller="Master";
          $action="index";
          
          if(isset($_GET['controller'])&&isset($_GET['action'])){$controller = $_GET['controller'];$action = $_GET['action'];
          }else{$controller = 'Master';$action = 'index';}

          return $_SERVER['PHP_SELF']."?controller=".$controller."&action=".$action;
    }
    
    public  function get_links(){
        
        return self::$links;
    }

    public function set_links($path,$q,$page,$limit)
	{
           $results = mysqli_query(self::getInstance(),$q);
           $row_cnt = mysqli_num_rows($results);
           $row_cnt = ceil($row_cnt/$limit);
           
               $pagination = "<ul class='pagination'>";
	       
               $page!=1 ? $previous = $page-1 : $previous= 1;    
               $page!=$row_cnt ? $next = $page+1 : $next = $row_cnt; 
               
               $pagination.= "<li><a href='".$path."&page=$previous'>Previous</a></li>";
           
           for($i=1;$i<=$row_cnt;$i++){
               
                  if($i==$page){
                   $pagination.= "<li style='background-color: #B0C4DE;'><a href='".$path."&page=$i'>$i</a></li>";
                  }else{
                   $pagination.= "<li><a href='".$path."&page=$i'>$i</a></li>";   
                  }
           }
                $pagination.= "<li><a href='".$path."&page=$next'>Next</a></li>";  
                $pagination.= "</ul>";
               
                
                self::$links = $pagination;  
	 
        }
            
    public function getInstance(){

    $con = mysqli_connect(Connection::$connect["host"],Connection::$connect["user"],Connection::$connect["password"],Connection::$connect["database"]);    
    $con->set_charset("utf8");
    return $con;
    
    }
}
?>