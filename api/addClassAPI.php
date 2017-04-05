<?php
    include_once('../model/autoloader.php');
    session_start();
    echo $name		        = $_POST['name'];
    echo $description		= $_POST['description'];
    echo $category		    = $_POST['category'];
    echo $type			    = $_POST['type'];
    echo $id_user 			    = $_SESSION['id_user'];
    
    if(!empty($name) && !empty($description)){
        echo "yey";
        Model\classModel::addClass($name, $description, $category, $type, $id_user);
        header('location: http://localhost/openclass/');
    }else{
        echo "WTF";
    }
    
?>