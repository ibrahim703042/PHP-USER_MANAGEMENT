
   <?php
      if(isset($_SESSION['auth'])){

         ?>
            <header id="header" class="header fixed-top d-flex align-items-center">

               <div class="d-flex align-items-center justify-content-between">

                  <a href="#" class="logo d-flex align-items-center"> 
                     <img src="assets/img/logo.png" alt=""> 
                     <span class="d-none d-lg-block">Admin</span> 
                  </a>
                  
                  <i class="bi bi-list toggle-sidebar-btn"></i>
               </div>
               <div class="search-bar">
                  <form class="search-form d-flex align-items-center" method="POST" action="#"> 
                     <input type="text" name="query" placeholder="Search" title="Enter search keyword"> 
                     <button type="submit" title="Search">
                        <i class="bi bi-search"></i>
                     </button>
                  </form>
               </div>
               <!--============== navbar=============== -->
               <?php include 'navbar.php'; ?>

            </header>
         <?php
      }else{
         ?>
            <header id="header" class="header fixed-top d-flex align-items-center">

               <div class="d-flex align-items-center justify-content-between">

                  <a href="#" class="logo d-flex align-items-center"> 
                     <img src="assets/img/logo.png" alt=""> 
                     <span class="d-none d-lg-block">Admin</span> 
                  </a>
                  
               </div>
               
               </header>
         <?php
      }
   ?>   
      