<?php


class Url{

    public function link($Controller,$action){

        require_once('./index.php?controller='.$Controller.'&action='.$action.'');
    }
    
    
}