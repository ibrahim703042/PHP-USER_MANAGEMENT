<?php
    include_once '../functions/fonction.php';

    if(isset($_SESSION['auth'])){

        if( $_SESSION['role_as'] != 1 ){ 
            header('Location: ../middleware/pages-error-404.php');
        }
        
    }else{
        header('Location: ../login.php');
    }

?>
