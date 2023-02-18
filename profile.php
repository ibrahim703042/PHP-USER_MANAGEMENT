
<div class="pagetitle">
   <h1>Profile</h1>
   <nav>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
         <li class="breadcrumb-item">User</li>
         <li class="breadcrumb-item active">Profile</li>
      </ol>
   </nav>
</div>

<section class="section profile">
   <div class="row">
      <!--=================================== profile ===========================-->

      <div class="col-xl-4">
         <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
               <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
               <h2>Jassa</h2>
               <h3>Web Designer</h3>
               <div class="social-links mt-2"> <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a></div>
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

               <!--============================== profile-overview ===========================-->
               <div class="tab-content pt-2">
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                     <h5 class="card-title">About</h5>
                     <p class="small fst-italic">
                        Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. 
                        Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae 
                        quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
                     </p>
                     <h5 class="card-title">Profile Details</h5>
                     <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                        <div class="col-lg-9 col-md-8">Jassa</div>
                     </div>
                     <div class="row">
                        <div class="col-lg-3 col-md-4 label">Company</div>
                        <div class="col-lg-9 col-md-8">Therichpost</div>
                     </div>
                     <div class="row">
                        <div class="col-lg-3 col-md-4 label">Job</div>
                        <div class="col-lg-9 col-md-8">Web Designer</div>
                     </div>
                     <div class="row">
                        <div class="col-lg-3 col-md-4 label">Country</div>
                        <div class="col-lg-9 col-md-8">USA</div>
                     </div>
                     <div class="row">
                        <div class="col-lg-3 col-md-4 label">Address</div>
                        <div class="col-lg-9 col-md-8">Ludhiana, Punjab, India</div>
                     </div>
                     <div class="row">
                        <div class="col-lg-3 col-md-4 label">Phone</div>
                        <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                     </div>
                     <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">
                           <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e982c788878d8c9b9a8687a98c91888499858cc78a8684">
                              [email&#160;protected]
                           </a>
                        </div>
                     </div>
                  </div>
                  <!--============================== edit profile ===========================-->
                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                     <form>
                        <div class="row mb-3">
                           <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                           <div class="col-md-8 col-lg-9">
                              <img src="../assets/img/profile-img.jpg" alt="Profile">
                              <div class="pt-2"> 
                                 <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image">
                                    <i class="bi bi-upload"></i>
                                 </a> 
                                 <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image">
                                    <i class="bi bi-trash"></i>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                           <div class="col-md-8 col-lg-9"> 
                              <input name="fullName" type="text" class="form-control" id="fullName" value="Jassa">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                           <div class="col-md-8 col-lg-9">
                              <textarea name="about" class="form-control" id="about" style="height: 100px">
                              Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. 
                              Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae 
                              quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
                           </textarea>
                        </div>
                        </div>
                        <div class="row mb-3">
                           <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                           <div class="col-md-8 col-lg-9"> <input name="company" type="text" class="form-control" id="company" value="Therichpost"></div>
                        </div>
                        <div class="row mb-3">
                           <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                           <div class="col-md-8 col-lg-9"> 
                              <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                           <div class="col-md-8 col-lg-9"> 
                              <input name="country" type="text" class="form-control" id="Country" value="USA">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                           <div class="col-md-8 col-lg-9"> 
                              <input name="address" type="text" class="form-control" id="Address" value="Ludhiana, Punjab, India">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                           <div class="col-md-8 col-lg-9"> 
                              <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                           <div class="col-md-8 col-lg-9"> 
                              <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                        </div>
                        </div>
                        <div class="row mb-3">
                           <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                           <div class="col-md-8 col-lg-9"> 
                              <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                           <div class="col-md-8 col-lg-9"> 
                              <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                           <div class="col-md-8 col-lg-9">
                               <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                           <div class="col-md-8 col-lg-9"> 
                              <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                           </div>
                        </div>
                        <div class="text-center"> 
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
