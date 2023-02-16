<div class="pagetitle">
    <h1>User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a>
            <li class="breadcrumb-item ">User</li>
            <li class="breadcrumb-item active">Add user</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="card rounded">
        <div class="card-body ">

            <form method="POST" action="functions/autocode.php" enctype="multipart/form-data" class=" mt-3 row g-3">

                <?php 
                    if(isset($_SESSION['message'])){
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                                <i class="bi bi-exclamation-triangle me-1"></i> 
                                <?= $_SESSION['message'] ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['message']);
                    }
                ?>

               <div class="col-md-6"> 
                    <label for="fname" class="form-label">First name</label>
                    <input type="text" class="form-control" autofocus required name="fname" 
                    id="fname" placeholder="Enter first name">
               </div>

               <div class="col-md-6"> 
                    <label for="lname" class="form-label">Last name</label>
                    <input type="text" class="form-control" required name="lname" 
                    id="lname" placeholder="Enter last name">
               </div>

                <div class="col-md-6"> 
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" required name="email" 
                    id="email" placeholder="Enter e-mail">
                </div>

                <div class="col-md-6"> 
                    <label for="phone" class="form-label">Phone</label> 
                    <input type="tel" class="form-control" required name="phone" 
                    id="phone" placeholder="Enter Phone number">
                </div>

                <div class="col-md-6"> 
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" required name="password" 
                    id="password" placeholder="Enter Password">
                </div>

                <div class="col-md-6"> 
                    <label for="password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" required name="conf_password" 
                    id="conf_password" placeholder="Confirm Password">
                </div>

                <div class="col-md-5"> 
                    <label for="role" class="form-label">Role</label> 
                    <select class="form-select" required name="role" aria-label="Default select example">
                        <option selected disabled>Choose role</option>
                        <option value="1">Super Admin</option>
                        <option value="0">Admin</option>
                    </select>
                </div>

                <div class="col-md-3"> 
                    <label for="status" class="form-label">Status</label> 
                    <div class="form-check">
                      <label class="form-check-label" for="">
                        Etat
                      </label>
                      <input class="form-check-input" type="checkbox" name="status" value="" id="">
                    </div>
                </div>

                <div class="col-md-4"> 
                    <label for="file" class="form-label">Photo</label> 
                    <input type="file" class="form-control" required name="file" id="file">
                </div>
                
                
                <div class=" text-end py-2">
                    <button type="submit" name="register_user_btn" class="btn btn-success">
                        <i class="bi bi-upload me-1"></i>Create user
                    </button> 
                </div>
            </form>
            
        </div>
    </div>
</section>



<?php
   
    if(isset($_POST[''])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $contact_no = $_POST['phone'];
        $password = $_POST['password'];
        $Conf_password = $_POST['conf_password'];
        $role = $_POST['role'];
        $status = isset($_POST['status']) ? '1':'0' ;
        
        $image =$_FILES['file']['name'];

        if($password == $Conf_password){
            
            //insert user data
            $insert_query = $user->create($fname,$lname,$email,$contact_no,$password,$role,$status,$image);
            
            if($insert_query){
                move_uploaded_file($_FILES["file"]["tmp_name"],"assets/img/avatars/profile/".basename($_FILES['file']['name']));
                $_SESSION['message'] = "Registered Successfully";
                header('Location:login.php');
            }
        }else{
            $_SESSION['message'] = "Password do not match";
            header('Location: index.php?page=register');
        }
    } 
?>
