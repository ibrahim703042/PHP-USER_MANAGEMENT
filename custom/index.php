
<!DOCTYPE html>
<html lang="en">
   <?php 
      session_start();
      include 'includes/head.php' 
   ?>
   <body>
      <?php include 'includes/header.php' ?>
      <?php include 'includes/sidebar.php' ?>
      
      <main id="main" class="main">
         <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'register';
            include $page.'.php';
         ?>
      </main>

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
      </a>  
    
      <?php include 'includes/foot.php' ?>
    </body>
</html>