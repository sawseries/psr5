<?php

namespace MyProject\Base;

use MyProject\Base\eloquent;

class BaseController extends eloquent{   
    
  public function runQuery($query) {
      $result = mysqli_query($this->conn,$query);
      while($row=mysqli_fetch_assoc($result)) {
        $resultset[] = $row;
      }		
      if(!empty($resultset))
        return $resultset;
    }

    public function numRows($query) {
      $result  = mysqli_query($this->conn,$query);
      $rowcount = mysqli_num_rows($result);
      return $rowcount;	
    }

    public static function  getIP()
    {
         if (getenv('HTTP_CLIENT_IP'))
        $ip = getenv('HTTP_CLIENT_IP');
         else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ip = getenv('HTTP_X_FORWARDED_FOR');
         else if(getenv('HTTP_X_FORWARDED'))
        $ip = getenv('HTTP_X_FORWARDED');
         else if(getenv('HTTP_FORWARDED_FOR'))
        $ip = getenv('HTTP_FORWARDED_FOR');
         else if(getenv('HTTP_FORWARDED'))
       $ip = getenv('HTTP_FORWARDED');
         else if(getenv('REMOTE_ADDR'))
        $ip = getenv('REMOTE_ADDR');
         else
        $ip = 'UNKNOWN';
         self::$ip = $ip;
         return $ip;
    }
    
}