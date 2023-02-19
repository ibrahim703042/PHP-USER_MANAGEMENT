
<nav class="header-nav ms-auto">

   <?php
      if(isset($_SESSION['auth'])){

         ?>
            <ul class="d-flex align-items-center">
               <li class="nav-item d-block d-lg-none"> 
                  <a class="nav-link nav-icon search-bar-toggle " href="#"> 
                     <i class="bi bi-search"></i> 
                  </a>
               </li>

               <!--=================================== Notification =============================================-->
               <li class="nav-item dropdown">
                  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> 
                     <i class="bi bi-bell"></i> 
                     <span class="badge bg-primary badge-number">
                        4
                     </span> 
                  </a>
                  
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">

                     <li class="dropdown-header"> 
                        You have 4 new notifications 
                        <a href="#">
                           <span class="badge rounded-pill bg-primary p-2 ms-2">View all</span>
                        </a>
                     </li>

                     <li>
                        <hr class="dropdown-divider">
                     </li>

                     <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                           <h4>Lorem Ipsum</h4>
                           <p>Quae dolorem earum veritatis oditseno</p>
                           <p>30 min. ago</p>
                        </div>
                     </li>

                     <li>
                        <hr class="dropdown-divider">
                     </li>

                     <li class="notification-item">
                        <i class="bi bi-x-circle text-danger"></i>
                        <div>
                           <h4>Atque rerum nesciunt</h4>
                           <p>Quae dolorem earum veritatis oditseno</p>
                           <p>1 hr. ago</p>
                        </div>
                     </li>

                     <li>
                        <hr class="dropdown-divider">
                     </li>

                     <li class="notification-item">
                        <i class="bi bi-check-circle text-success"></i>
                        <div>
                           <h4>Sit rerum fuga</h4>
                           <p>Quae dolorem earum veritatis oditseno</p>
                           <p>2 hrs. ago</p>
                        </div>
                     </li>

                     <li>
                        <hr class="dropdown-divider">
                     </li>

                     <li class="notification-item">
                        <i class="bi bi-info-circle text-primary"></i>
                        <div>
                           <h4>Dicta reprehenderit</h4>
                           <p>Quae dolorem earum veritatis oditseno</p>
                           <p>4 hrs. ago</p>
                        </div>
                     </li>

                     <li>
                        <hr class="dropdown-divider">
                     </li>

                     <li class="dropdown-footer"> 
                        <a href="#">
                           Show all notifications
                        </a>
                     </li>

                  </ul>
               </li>

               <!--============================================ Message ========================================-->

               <li class="nav-item dropdown">
                  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> 
                     <i class="bi bi-chat-left-text"></i> 
                     <span class="badge bg-success badge-number">
                        3
                     </span> 
                  </a>

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">

                     <li class="dropdown-header"> 
                        You have 3 new messages 
                        <a href="#">
                           <span class="badge rounded-pill bg-primary p-2 ms-2">
                              View all
                           </span>
                        </a>
                     </li>

                     <li>
                        <hr class="dropdown-divider">
                     </li>

                     <li class="message-item">
                        <a href="#">
                           <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                           <div>
                              <h4>Jassa</h4>
                              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                              <p>4 hrs. ago</p>
                           </div>
                        </a>
                     </li>

                     <li>
                        <hr class="dropdown-divider">
                     </li>

                     <li class="message-item">
                        <a href="#">
                           <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                           <div>
                              <h4>Jassa</h4>
                              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                              <p>6 hrs. ago</p>
                           </div>
                        </a>
                     </li>

                     <li>
                        <hr class="dropdown-divider">
                     </li>

                     <li class="message-item">
                        <a href="#">
                           <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                           <div>
                              <h4>Jassa</h4>
                              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                              <p>8 hrs. ago</p>
                           </div>
                        </a>
                     </li>

                     <li>
                        <hr class="dropdown-divider">
                     </li>

                     <li class="dropdown-footer"> 
                        <a href="#">
                           Show all messages
                        </a>
                     </li>

                  </ul>
               </li>

               <!--=================================== Profile dropdown ======================================-->

               <li class="nav-item dropdown pe-3">

                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="" data-bs-toggle="dropdown">
                     <img src="assets/img/avatars/profile/<?= $_SESSION['auth_user']['image'] ?>" alt="Profile" class="rounded-circle"> 
                     <span class="d-none d-md-block dropdown-toggle ps-2">
                        <?= $_SESSION['auth_user']['fname'] ?>
                     </span> 
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                     <li class="dropdown-header">
                        <h6><?= $_SESSION['auth_user']['fname']." ".$_SESSION['auth_user']['lname'] ?></h6>
                        <span>
                        <?php
                              if ($_SESSION['auth_user']['role'] == 0){

                                 ?>
                                    <?=('Customer');?>  
                                 <?php	
         
                              } 
                           ?>
                        </span>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li> 
                        <a class="dropdown-item d-flex align-items-center" href="index.php?page=user-profile&id=<?= $_SESSION['auth_user']['id']?>"> 
                           <i class="bi bi-person"></i> 
                           <span>My Profile</span> 
                        </a>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li> 
                        <a class="dropdown-item d-flex align-items-center" href="index.php?page=user-profile&id=<?= $_SESSION['auth_user']['id']?>"> 
                           <i class="bi bi-gear"></i> 
                           <span>Account Settings</span> 
                        </a>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li> 
                        <a class="dropdown-item d-flex align-items-center" href="logout.php"> 
                           <i class="bi bi-box-arrow-right"></i> <span>Sign Out</span> 
                        </a>
                     </li>
                  </ul>
   
               </li>

            </ul>
         <?php
      }else{
         
      }
   ?>

</nav>