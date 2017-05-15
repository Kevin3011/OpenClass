<?php

    include_once('../model/autoloader.php');
    if(isset($_POST["submit"])){
        session_start();
        echo $title   = $_POST['topic'];
        echo $description		= $_POST['description'];
        echo $class_code	    = $_GET['ClassCode'];
        echo $id_user 			= $_SESSION['id_user'];
        
        if(!empty($title) && !empty($description)){
            $target_type = "cprofile";
            $datetime_crt = Model\dbHelper::getDateTime();
//            $classcode = Model\dbHelper::getDTM();
            echo $titleid = str_replace(" ", "-", $title);
              Model\classDiscussionModel::addDiscussion($titleid,$title,$description,$datetime_crt,$class_code,$id_user);
           
            header('location: http://localhost/class/'.$class_code.'/discussion/'.$titleid);
        }else{
            echo "WTF";
        }

    }
    
?>