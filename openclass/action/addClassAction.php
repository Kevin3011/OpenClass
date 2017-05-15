<?php

    include_once('../model/autoloader.php');
    if(isset($_POST["submit"])){
        session_start();
        $name		        = $_POST['name'];
        $description		= $_POST['description'];
        $category		    = $_POST['category'];
        $type			    = $_POST['type'];
        $id_user 			= $_SESSION['id_user'];
        if(!empty($name) && !empty($description)){
            $target_type = "cprofile";
            $createDate = Model\dbHelper::getDateTime();
            $classcode = Model\dbHelper::getDTM();
            include_once('upload.php');

            $result = uploadImages($target_type,$classcode);
            if($result['status'] != 0){
                echo $result['message'];
                Model\classModel::addClass($name, $description, $result['filePath'], $category, $type, $createDate, $id_user);
                header('location: http://localhost/');
            }else{
                echo $result['message'];
            }
            
        }else{
            echo "WTF";
        }        
    }
    
?>