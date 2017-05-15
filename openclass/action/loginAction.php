<?php
    include_once('../model/autoloader.php');
    
    $name		        = $_POST['username'];
    $pass		        = $_POST['password'];
    //$username			= $_SESSION['username'];
     
    
    if(!empty($name) && !empty($pass)){
        $user = Model\userModel::checkUser($name,$pass);
        if($user){
            session_start();
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['picture'] = $user['picture'];
        }else{
            echo "FAILED";
            session_start();
            session_unset();
            session_destroy(); 
        }
    }
    
    header('location: http://localhost/home');
?>