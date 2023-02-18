<?php
    // include_once '../functions/fonction.php';

    if(isset($_SESSION['auth'])){

        if( $_SESSION['role_as'] != 1 ){

            $_SESSION['error'] = "Your are not authorised to access this page.";
            header('Location: ../index.php'); 
        }
        
    }else{
        $_SESSION['error'] = "LogIn to continue.";
        header('Location: ../login.php');  
    }

?>
