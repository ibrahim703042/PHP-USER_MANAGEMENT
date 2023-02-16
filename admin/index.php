
<?php 
   include_once '../config/dbconnection.php';
   include_once '../functions/fonction.php';
   //include_once '../middleware/adminMiddleware.php';
?>
<!DOCTYPE html>
<html lang="en">
   <?php include 'includes/head.php' ?>
   <body>
      <?php include 'includes/header.php' ?>
      <?php include 'includes/sidebar.php' ?>
      
      <main id="main" class="main">
         <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
            include $page.'.php';
         ?>
      </main>

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
      </a>  
    
      <?php include 'includes/foot.php' ?>
    </body>
</html>