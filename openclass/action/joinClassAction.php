<?php
include_once('../model/autoloader.php');
      session_start();
      $code = $_GET['ClassCode'];
      $isAccepted = Model\classModel::getUserStatus($_SESSION['id_user'],$code);
      
      if(empty($isAccepted) && !is_numeric($isAccepted)){
        $data = Model\classModel::getClassByCode($code);
        if($_SESSION['id_user'] != $data['id_user']){
            Model\classModel::joinClass($_SESSION['id_user'],$code,$data['type']);
        }
      }
                  
      header("Location:http://localhost/class/".$code);

    
?>

