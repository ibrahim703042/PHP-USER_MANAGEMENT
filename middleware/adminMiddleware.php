<?php
    include_once '../functions/fonction.php';

    if(isset($_SESSION['auth'])){

        if( $_SESSION['role_as'] != 1 || $_SESSION['role_as'] != 2 ){

            error('../index.php','Your are not authorised to access this page');
        }
        
    }else{
        error('../login.php','LogIn to continue');
    }

?>
