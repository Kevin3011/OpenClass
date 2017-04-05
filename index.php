<?php
    session_start();
    if(isset($_SESSION['id_user'])){
        header("Location: home");
    }else{
        header("Location: users/login");
    }
?>