
<div class="pagetitle">
   <h1>Profile</h1>
   <nav>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.php">Home</a>
         <li class="breadcrumb-item">User</li>
         <li class="breadcrumb-item active">Profile</li>
      </ol>
   </nav>
</div>


<?php

   if(isset($_GET['id'])){
      
      $id = $_GET['id'];
      $table = getByID('users',$id);

      if(mysqli_num_rows($table) > 0){

         $row = mysqli_fetch_array($table);
         ?>
            <section class="section profile">
               <div class="row">
                  <!--=================================== profile image ===========================-->

                  <div class="col-xl-4">
                     <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                           <img src="assets/img/avatars/profile/<?= $row['image'] ?>" alt="Profile" class="rounded-circle"> 
                                                            
                           <h2>
                              <?= $row['fname']." ".$row['lname'] ?>
                           </h2>

                           <h3>
                              <?php 
                                 if($row['role_as'] == 1){
                                    ?>
                                       <?='Super admin'?>
                                    <?php
                                 }else if($row['role_as'] == 2){
                                    ?>
                                       <?='Admin'?>
                                    <?php                                                   
                                 }else{
                                    ?>
                                       <?= 'Visitor'?>
                                    <?php  
                                 } 
                              ?> 
                           </h3>

                           <div class="social-links mt-2"> 
                              <a href="#" class="twitter">
                                 <i class="bi bi-twitter"></i>
                              </a> 
                              <a href="#" class="facebook">
                                 <i class="bi bi-facebook"></i>
                              </a> 
                              <a href="#" class="instagram">
                                 <i class="bi bi-instagram"></i>
                              </a> 
                              <a href="#" class="linkedin">
                                 <i class="bi bi-linkedin"></i>
                              </a>
                           </div>

                        </div>
                     </div>
                  </div>

                  <!--============================== nav-tabs-bordered ===========================-->

                  <div class="col-xl-8">
                     <div class="card">
                        <div class="card-body pt-3">
                           <ul class="nav nav-tabs nav-tabs-bordered">
                              <li class="nav-item"> 
                                 <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">
                                    Overview
                                 </button>
                              </li>
                              <li class="nav-item"> 
                                 <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">
                                    Edit Profile
                                 </button>
                              </li>
                              <li class="nav-item"> 
                                 <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">
                                    Settings
                                 </button>
                              </li>
                              <li class="nav-item"> 
                                 <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">
                                    Change Password
                                 </button>
                              </li>
                           </ul>

                           <div class="tab-content pt-2">

                              <!--============================== profile-overview ===========================-->
                              <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                 <h5 class="card-title">About</h5>
                                 <p class="small fst-italic">
                                    <?= $row['about']?>
                                 </p>

                                 <h5 class="card-title">Profile Details</h5>

                                 <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                    <div class="col-lg-9 col-md-8"><?= $row['fname']." ".$row['lname'] ?></div>
                                 </div>

                                 <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Role</div>
                                    <div class="col-lg-9 col-md-8">
                                       <?php 
                                          if($row['role_as'] == 1){
                                             ?>
                                                <?='Super admin'?>
                                             <?php
                                          }else if($row['role_as'] == 2){
                                             ?>
                                                <?='Admin'?>
                                             <?php                                                   
                                          }else{
                                             ?>
                                                <?= 'Visitor'?>
                                             <?php  
                                          }   
                                       ?> 
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Status</div>
                                    <div class="col-lg-9 col-md-8">
                                       <?php 
                                          if($row['status'] == 1){
                                             ?>
                                                <span class='badge bg-success'><?= 'Enable'?></span>
                                             <?php
                                          }else{
                                             ?>
                                                <span class='badge bg-danger'><?= 'Disable'?></span>
                                             <?php                                                   
                                          } 
                                       ?> 
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Country</div>
                                    <div class="col-lg-9 col-md-8">
                                       <?php 
                                          foreach($GLOBALS['countries_list'] as $country_code => $value){
                                             if( $row['country'] == $country_code ){
                                                echo $value['name'];
                                             }
                                             
                                          }

                                       ?>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                    <div class="col-lg-9 col-md-8"><?= $row['address']?></div>
                                 </div>

                                 <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8"><?= $row['contact_no']?></div>
                                 </div>

                                 <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">
                                       <a href="#" class="__cf_email__" data-cfemail="e982c788878d8c9b9a8687a98c91888499858cc78a8684">
                                       <?= $row['email']?>
                                       </a>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Created date</div>
                                    <div class="col-lg-9 col-md-8">
                                       <?= $row['created_at']?>
                                    </div>
                                 </div>

                              </div>
                              
                              <!--============================== edit profile ===========================-->
                              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                 <!--============================== edit profile image ===========================-->
                                 <form method="POST" enctype="multipart/form-data">

                                    <div class="row mb-3">
                                       <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                       <div class="col-md-8 col-lg-9">
                                          <img src="assets/img/avatars/profile/<?= $row['image'] ?>" alt="Profile">
                                          <input type="hidden" value="<?= $row['image'] ?>" name="old_image">

                                             
                                          <div class="pt-2"> 
                                             <span class="" title="Upload new profile image">
                                                <input type="file" name="file" >
                                                <button type="submit" class="btn btn-success" name="profile_image_btn">
                                                   <i class="bi bi-upload"></i>
                                                </button>
                                             </span>
                                             <!-- <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image">
                                                <i class="bi bi-upload"></i>
                                             </a> 
                                             <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image">
                                                <i class="bi bi-trash"></i>
                                             </a> -->
                                          </div>
                                       </div>
                                    </div>

                                 </form>
                                 
                                 <!--============================== edit profile user information ===========================-->
                                 <form method="POST" action="">
                                    
                                    <div class="row mb-3">
                                       <div class="col-md-6"> 
                                          <label for="fname" class="form-label">First name</label>
                                          <input type="text" class="form-control"  name="fname" 
                                           id="fname" value="<?= $row['fname'] ?>" placeholder="Enter first name">
                                       </div>

                                       <div class="col-md-6"> 
                                       <label for="lname" class="form-label">Last name</label>
                                       <input type="text" class="form-control"  name="lname" 
                                       id="lname" value="<?= $row['lname'] ?>" placeholder="Enter last name">
                                       </div>
                                    </div>

                                    <div class="row mb-3">
                                       <div class="col-md-12">
                                          <label for="about" class="form-label">About</label>
                                          <textarea name="about" class="form-control" id="about" style="height: 100px"><?= $row['about'] ?></textarea>
                                       </div>    
                                    </div>

                                    <div class="row mb-3">

                                       <div class="col-md-6"> 
                                          <label for="role" class="form-label">Role</label> 
                                          <select class="form-select"  name="role" aria-label="Default select example">
                                                <option value="<?= $row['role_as'] ?>">
                                                   <?php
                                                      if($row['role_as'] == 1){
                                                         echo 'Super admin';
                                                      }else if($row['role_as'] == 2){
                                                         echo 'Admin';
                                                      }else{
                                                         echo 'No Recod';
                                                      }
                                                   ?>
                                                </option>
                                                <option disabled>Choose role</option>
                                                <option value="1">Super Admin</option>
                                                <option value="0">Admin</option>
                                          </select>
                                       </div>
                                       <div class="col-md-6"> 
                                          <label for="status" class="form-label">Status</label> 
                                          <select class="form-select"  name="status" aria-label="Default select example">
                                             <option value="<?= $row['role_as'] ?>">
                                                <?php
                                                   if($row['status'] == 1){
                                                      echo 'Enable';
                                                   }else if($row['status'] == 0){
                                                      echo 'Disable';
                                                   }else{
                                                      echo 'No Recod';
                                                   }
                                                ?>
                                             </option>
                                             <option disabled>Choose Status</option>
                                             <option value="1">Enable</option>
                                             <option value="0">Disable</option>
                                          </select>
                                       </div>   

                                    </div>

                                    <div class="row mb-3">

                                       <div class="col-md-6"> 
                                          <label for="country" class="form-label">Country</label> 
                                          <select class="form-select" id="country"  name="country" aria-label="Default select example">
                                             
                                             <option value="" disabled selected >Choose country</option>
                                             <?php 
                                                /* foreach($GLOBALS['countries_list'] as $country_code => $value){
                                                   ?>
                                                      <option value="<?= $country_code ?>" <?= $row['country'] == $country_code ? 'Selected' :''?> > <?= $value['name'] ?></option>

                                                   <?php
                                                } */
                                                echo selected_countries_in_array();

                                             ?>

                                          </select>
                                       </div>
                                       <div class="col-md-6"> 
                                          <label for="address" class="form-label">Address</label>
                                          <input type="text"  class="form-control" value="<?= $row['address'] ?>"  name="address" 
                                          id="address" placeholder="Enter address">
                                       </div>

                                    </div>

                                    <div class="row mb-3">
                                       <div class="col-md-6"> 
                                          <label for="phone" class="form-label">Phone</label> 
                                          <input type="tel" class="form-control" value="<?= $row['contact_no'] ?>"  name="phone" 
                                          id="phone" placeholder="Enter Phone number">
                                       </div>
                                       <div class="col-md-6"> 
                                          <label for="email" class="form-label">Email</label>
                                          <input type="email" class="form-control" readonly value="<?= $row['email'] ?>"  name="email" 
                                          id="email" placeholder="Enter e-mail">
                                       </div>
                                    </div>

                                    
                                    <div class="text-end"> 
                                       <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                 </form>
                              </div>

                              <!--============================== E-mail settings  ===========================-->
                              <div class="tab-pane fade pt-3" id="profile-settings">
                                 <form>
                                    <div class="row mb-3">
                                       <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                       <div class="col-md-8 col-lg-9">
                                          <div class="form-check"> 
                                             <input class="form-check-input" type="checkbox" id="changesMade" checked> 
                                             <label class="form-check-label" for="changesMade"> 
                                                Changes made to your account 
                                             </label>
                                          </div>
                                          <div class="form-check"> 
                                             <input class="form-check-input" type="checkbox" id="newProducts" checked> 
                                             <label class="form-check-label" for="newProducts"> 
                                                Information on new products and services 
                                             </label>
                                          </div>
                                          <div class="form-check"> 
                                             <input class="form-check-input" type="checkbox" id="proOffers"> 
                                             <label class="form-check-label" for="proOffers"> 
                                                Marketing and promo offers 
                                             </label>
                                          </div>
                                          <div class="form-check"> 
                                             <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled> 
                                             <label class="form-check-label" for="securityNotify"> 
                                                Security alerts 
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-center"> 
                                       <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                 </form>
                              </div>

                              <!--============================== change Password ===========================-->
                              <div class="tab-pane fade pt-3" id="profile-change-password">
                                 <form>
                                    <div class="row mb-3">
                                       <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                       <div class="col-md-8 col-lg-9"> <input name="password" type="password" class="form-control" id="currentPassword"></div>
                                    </div>
                                    <div class="row mb-3">
                                       <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                       <div class="col-md-8 col-lg-9"> <input name="newpassword" type="password" class="form-control" id="newPassword"></div>
                                    </div>
                                    <div class="row mb-3">
                                       <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                       <div class="col-md-8 col-lg-9"> <input name="renewpassword" type="password" class="form-control" id="renewPassword"></div>
                                    </div>
                                    <div class="text-center"> <button type="submit" class="btn btn-primary">Change Password</button></div>
                                 </form>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </section>

         <?php

      }else{
         ?>
            <section class="section profile">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body pt-3">
                           <section class="section error-404 d-flex flex-column align-items-center justify-content-center">
                                 <h1>404</h1>
                                 <h2>The id you are looking for doesn't exist.</h2>
                                 <a class="btn" href="index.php?page=pages/users/index">
                                    Back to home
                                 </a> 
                                 <img src="assets/img/not-found.svg" class="img-fluid py-2" alt="Page Not Found" width="200">
                           </section>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
                     
         <?php
      }

   }
?>

<?php 

   if(isset($_POST["profile_image_btn"])){

      $target= $_FILES['file']['name'];
      $old_image= $_POST["old_image"];
      $newImage = $_FILES['file']['name'];
   
      if( $newImage != "" ){
         $target = $newImage;
      }else{
         $target = $old_image;
         redirect('index.php?page=pages/users/admins/index','Data Updated Successfully');
      }

      $sql="UPDATE users SET image='$target' WHERE id=".$id."";
      $query=$dbconnection->EXEC($sql);

      if($query){

         move_uploaded_file($_FILES["file"]["tmp_name"],"assets/img/avatars/profile/".basename($_FILES['file']['name']));
         redirect('index.php?page=pages/users/admins/index','Data Updated Successfully');

      }else{
         error('','Something went wrong!');
      }

   }

?>
