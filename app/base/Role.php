<?php
namespace MyProject\Base;
class Role
{

    public  $ID;
    public  $ROLE_ID;
    public  $ROOT;
    public  $SUB;
    public  $DOCUMENT;
    public  $URL;


    public function __construct($ID,$ROLE_ID,$ROOT,$SUB,$DOCUMENT,$URL)
    {
        $this->ID = $ID;
        $this->ROLE_ID = $ROLE_ID;
        $this->ROOT = $ROOT;
        $this->SUB = $SUB;
        $this->DOCUMENT = $DOCUMENT;
        $this->URL = $URL;
    }


    public function getRoot(){
        $list = array();
        $db = Db::getInstance();
        $req = $db->query("select * from e004_role 
                    where e004_role.ROOT='1' 
                    and e004_role.ROLE_ID IN(select e005_permission.role_id from e005_permission 
                    where user_id='".Auth::getUserID()."' 
                    and e005_permission.read_amd='1')");

        foreach($req->fetchAll() as $post) {
            $list[] = new Role($post['ID'],$post['ROLE_ID'],$post['ROOT'],$post['SUB'],$post['DOCUMENT'],$post['URL']);
        }
        return $list;
    }

    public function getSub($role_id){
        $list = array();
        $db = Db::getInstance();
        $req = $db->query("select * from e004_role 
                    where e004_role.ROOT='{$role_id}'
                    and e004_role.ROLE_ID IN(select e005_permission.role_id from e005_permission 
                     where user_id='".Auth::getUserID()."' and e005_permission.read_amd='1')");

        foreach($req->fetchAll() as $post) {
            $list[] = new Role($post['ID'],$post['ROLE_ID'],$post['ROOT'],$post['SUB'],$post['DOCUMENT'],$post['URL']);
        }
        return $list;
    }


    public function check($user_id){
        $list = array();
        $db = Db::getInstance();
        $stmt = $db->query("select * from e005_permission 
                    where e005_permission.user_id='{$user_id}'");
        $num_row = $stmt->rowCount();
        if($num_row>0){
            return true;
        }else{
            return false;
        }
    }



    public function FndRole($role_id){
        $list = array();
        $db = Db::getInstance();
        $req = $db->query("select * from e005_permission where ");
        foreach($req->fetchAll() as $post) {
            $list[] = new Role($post['ID'],$post['ROLE_ID'],$post['ROOT'],$post['SUB'],$post['DOCUMENT'],$post['URL']);
        }
        return $list;
    }


    public function LEVEL($role_id){
        $db = Db::getInstance();
        $stmt = $db->query("select * from e004_role where ROLE_ID='".$role_id."'");
        $stmt->execute();
        $row = $stmt->fetch();
        return $row["LEVEL"];
    }
    
    


    public function READ($role_id){

    }

    public function WRITE($role_id){

    }

    public function ADD($role_id){

    }

    public function EDIT($tran_id,$role_id,$code,$create_by){
        $db = Db::getInstance();
        $stmt = $db->query("select * from e005_permission 
                    Inner join e006_transaction
                    where e005_permission.user_id='".Auth::getUserID()."' 
                    and e005_permission.role_id='".$role_id."' 
                    and e005_permission.edit_amd='1' 
                    and e006_transaction.ID='".$tran_id."' 
                    and e006_transaction.code='".$code."'  
                    and e006_transaction.open<>'f' and (e006_transaction.status<>'m' or e006_transaction.status<>'y')");
      
        $num_row = $stmt->rowCount();
        
        if(($num_row>0)&&(Auth::getEmpID()==$create_by)){
            return true;
        }else{
            return false;
        }
      
    }

    public function ADMIN($role_id,$code){
        $db = Db::getInstance();
        $stmt = $db->query("select * from e005_permission 
                    Inner join e006_transaction
                    where e005_permission.user_id='".Auth::getUserID()."' 
                    and e005_permission.role_id='".$role_id."' 
                    and e005_permission.admin_approve='1' 
                    and e006_transaction.code='".$code."'");
        $num_row = $stmt->rowCount();
        if($num_row>0){
            return true;
        }else{
            return false;
        }
    }



    public function SUPERADMIN($role_id,$code){
        $db = Db::getInstance();
        $stmt = $db->query("select * from e005_permission 
                    Inner join e006_transaction
                    where e005_permission.user_id='".Auth::getUserID()."' 
                    and e005_permission.role_id='".$role_id."' 
                    and e005_permission.super_approve='1' 
                    and e006_transaction.code='".$code."'");
        $num_row = $stmt->rowCount();
        if($num_row>0){
            return true;
        }else{
            return false;
        }
    }



    public function DELETE($role_id){

    }




}