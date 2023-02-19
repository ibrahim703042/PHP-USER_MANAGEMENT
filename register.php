
<div class="pagetitle">
    <h1>User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a>
            <li class="breadcrumb-item ">User</li>
            <li class="breadcrumb-item active">Add user</li>
        </ol>
    </nav>
</div>

<?php
    /* echo "<pre>";
        print_r($_POST);
    echo "</pre>"; */
?>

<section class="section dashboard">
    <div class="card">
        <div class="card-body ">
            
            <form method="POST" action="functions/authcode.php" enctype="multipart/form-data" class=" mt-3 row g-3">

                <div class="col-md-4 col-lg-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-2">
                        <img class="rounded-circle mt-2" width="100px" id="chosenFile"
                            src="assets/img/avatars/profile/avatar.jpg">

                        <!--upload image-->
                        <input type="file" required name="file" onchange="readURL(this);"
                            class="form-control form-control-sm mt-2" >

                    </div>
                </div>

                <div class="col-md-8 col-lg-9 mt-2 border-right">
                    <div class="row g-3">

                        <div class="col-md-6"> 
                                <label for="fname" class="form-label">First name</label>
                                <input type="text" class="form-control" autofocus  required name="fname" 
                                id="fname" placeholder="Enter first name">
                        </div>
                        <div class="col-md-6"> 
                                <label for="lname" class="form-label">Last name</label>
                                <input type="text" class="form-control"  required name="lname" 
                                id="lname" placeholder="Enter last name">
                        </div>

                        <div class="col-md-12"> 
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control"  required name="email" 
                            id="email" placeholder="Enter e-mail">
                        </div>
                        
                        <div class="col-md-6"> 
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control"  required name="password" 
                            id="password" placeholder="Enter Password">
                        </div>
                        <div class="col-md-6"> 
                            <label for="password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" required required name="conf_password" 
                            id="conf_password" placeholder="Confirm Password">
                        </div>

                        <div class="col-md-6"> 
                            <label for="country" class="form-label">Country</label> 
                            <select class="form-select" id="country"  required name="country" aria-label="Default select example">
                                <option selected disabled>Choose country</option>
                                <?php 
                                    // user country code for selected option
                                    $user_country_code = 'BI';
                                    echo countries_dropdown($user_country_code);
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6"> 
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control"  required name="address" 
                            id="address" placeholder="Bujumbura, Mukaza, Buyenzi 5 Av No 55">   
                        </div>

                        <div class="col-md-12"> 
                            <label for="phone" class="form-label">Phone</label> 
                            <input type="tel" class="form-control"  required name="phone" 
                            id="phone" placeholder="Enter Phone number">
                        </div>
    
                        <div class=" text-end py-2">
                            <button type="submit" required name="register_user_btn" class="btn btn-success">
                                <i class="bi bi-upload me-1"></i>Create user
                            </button> 
                        </div>
                    </div>
                </div>

            </form>
            
        </div>
    </div>
</section>
