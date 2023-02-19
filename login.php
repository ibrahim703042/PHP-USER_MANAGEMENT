<?php
   session_start();
   include_once 'config/dbconnection.php';
   include_once 'functions/fonction.php';
?>
<!DOCTYPE html>
<html lang="en">
   <?php include 'includes/head.php' ?>
   <body>

   <main>
      <div class="container">
         <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
               <div class="row justify-content-center">

                  <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                     <div class="d-flex justify-content-center py-4"> 
                        <a href="index.html" class="logo d-flex align-items-center w-auto"> 
                           <img src="assets/img/logo.png" alt=""> 
                           <span class="d-none d-lg-block">
                              Authentification
                           </span> 
                        </a>
                     </div>

                     <div class="card mb-3">
                        <div class="card-body">
                           <div class="pt-4 pb-2">
                              <h5 class="card-title text-center pb-0 fs-4">
                                 Login to Your Account
                              </h5>
                              <p class="text-center small">
                                 Enter your email & password to login
                              </p>
                           </div>
                           
                           <form class="row g-3 needs-validation" method="POST" action="functions/authcode.php" novalidate>

                              <div class="col-12">
                                 <label for="youremail" class="form-label">Email</label>
                                 <div class="input-group has-validation">
                                    <input type="text" name="email" class="form-control" id="youremail" placeholder="Enter email" required>
                                    <div class="invalid-feedback">Please enter your email.</div>
                                 </div>
                              </div>

                              <div class="col-12">
                                 <label for="yourPassword" class="form-label">Password</label> 
                                 <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Enter password" required>
                                 <div class="invalid-feedback">Please enter your password!</div>
                              </div>

                              <div class="col-12">
                                 <div class="form-check"> 
                                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe"> 
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                 </div>
                              </div>

                              <div class="col-12"> 
                                 <button class="btn btn-primary w-100" type="submit" name="login_btn">Login</button>
                              </div>

                              <div class="col-12">
                                 <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                              </div>

                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </main>
   
   <?php include 'includes/foot.php' ?>

   </body>
</html>
