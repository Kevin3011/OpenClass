<?php
    require_once('models.php');
    echo $name		        = $_POST['name'];
    echo $description		= $_POST['description'];
    echo $category		    = $_POST['category'];
    echo $type			    = $_POST['type'];
    $username               = "vinzadhitama";
    //$username			= $_SESSION['username'];
     
    $db = new DBHelper();
    if(!empty($name) && !empty($description) && !empty($category) && !empty($type) && !empty($username)){
        $db->addClass($name, $description, $category, $type, $username);
    }
    
    //header('location: http://localhost/home');
?>