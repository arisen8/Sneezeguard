<?php
require('includes/configure.php');
class Urlvalidation {

    public $servername = DB_SERVER;
    public $username = DB_SERVER_USERNAME;
    public $password = DB_SERVER_PASSWORD;
    public $dbname = DB_DATABASE;
    public $connt;
  
    public function __construct()
    {
        $this->connt=mysqli_connect($this->servername,$this->username,$this->password,$this->dbname) or die(mysqli_connect_error());
    }

    public function tep_check_model_name($model_name){
        $sql='SELECT count(*) as total FROM Models WHERE `Name`="'.$model_name.'" ';
        $result=mysqli_query($this->connt,$sql);
        $count=mysqli_fetch_assoc($result);
        if($count['total']>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function tep_check_mid($mid){
        if(is_numeric($mid)){
            $sql='SELECT count(*) as total FROM categories WHERE `categories_id`="'.$mid.'" ';
            $result=mysqli_query($this->connt,$sql);
            $count=mysqli_fetch_assoc($result);
            if($count['total']>0){
                return true;
            }else{
                return false;
            }
        }else{
           return false;
        }
    
    }
    
    public function tep_bay_check($bay){
        $baylist=array('1BAY','2BAY','3BAY','4BAY','2BAYEXT');
        if(in_array($bay,$baylist,TRUE)){
            return true;
        }else{
            return false;
        }
    }
    
    public function tep_check_image($path){
        if(file_exists($path)){
            return true;
        }else{
            return false;
        }
    }

    public function tep_check_special_charectar($string){
        if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string)){
            return true;
        }else{
            false;
        }
    }

    public function tep_check_by_product_id($id){
        if($this->tep_check_special_charectar($id)){
            return false;
        }else{
            if(is_numeric($id)){
                $sql='SELECT count(*) as total FROM products WHERE `products_id`="'.$id.'" ';
                $result=mysqli_query($this->connt,$sql);
                $count=mysqli_fetch_assoc($result);
                if($count['total']>0){
                    return true;
                }else{
                    return false;
                }
            }else{
               return false;
            }
        }
    }
	
	
	
	
    public function tep_check_by_about_id($id){
        if($this->tep_check_special_charectar($id)){
            return false;
        }else{
           
                $sql='SELECT count(*) as total FROM insdeadm WHERE `divid`="'.$id.'" ';
                $result=mysqli_query($this->connt,$sql);
                $count=mysqli_fetch_assoc($result);
                if($count['total']>0){
                    return true;
                }else{
                    return false;
                }
           
        }
    }
	
	

  }
?>