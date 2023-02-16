<?php
    include 'config/dbconnection.php';
    session_start();
    session_destroy();
    if(isset($_SESSION['auth'])){
        unset($_SESSION['auth']);
        unset($_SESSION['auth_user']);
    }
    header("location: login.php");
    exit();
?>
