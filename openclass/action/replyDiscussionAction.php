<?php

    include_once('../model/autoloader.php');
    if(isset($_POST["submit"])){
        session_start();
        echo $comment           = $_POST['comment'];
        echo $discussion_no		= $_GET['discussion_no'];
        echo $id_user 			= $_SESSION['id_user'];
        echo $class_code        = $_GET['ClassCode'];
        
        if(!empty($comment)){
            $datetime_crt = Model\dbHelper::getDateTime();
            Model\classDiscussionModel::replyDiscussion($comment,$datetime_crt,$discussion_no,$id_user);
           
            header('location: http://localhost/class/'.$class_code.'/discussion/'.$discussion_no);
        }else{
            echo "WTF";
        }

    }
    
?>