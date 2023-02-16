
<?php 
   
   if(!isset($_SESSION['auth'])){
    
        header('Location:../../../index.php');
    }

?>
<?php

    if(isset($_GET['edit_id'])){
        
        $id = $_GET['edit_id'];
        extract($admin->getID($id));	
    }
?>

<div class="pagetitle">
    <h1>User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a>
            <li class="breadcrumb-item ">User</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="card rounded-pill border border-warning">
        <div class="card-body ">

            <form method="POST" action="" enctype="multipart/form-data" class=" mt-3 row g-3">

               <div class="col-md-12"> 
                    <label for="username" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" value="<?= $nom ?>" name="username" id="username" placeholder="Entrer nom utilisateur">
               </div>
                
                <div class="col-md-6"> 
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" value="<?= $email ?>" name="email" id="email" placeholder="Entrer e-mail">
                </div>

                <div class="col-md-6"> 
                    <label for="phone" class="form-label">Telephone</label> 
                    <input type="number" class="form-control" value="<?= $telephone ?>" name="phone" id="phone" placeholder="Entrer numero de telephone">
                </div>

                <div class="col-md-6"> 

                    <label for="role" class="form-label">Role</label> 
                    <select class="form-select"     name="role" aria-label="Default select example">
                        
                        <option selected value="<?= $role_as ?>">
                            <?php 
                                if ($role_as == 1){

                                    ?>
                                        
                                        <?=('Super administrateur');?>
                                        
                                    <?php	

                                }
                                else {
                                    ?>
                                        <?=('Administrateur');?>
                                        
                                    <?php	
                                }
                            ?>
                        </option>

                        <option disabled>Choisir</option>
                        <option value="0">Administrateur</option>
                        <option value="1">Super administrateur</option>

                    </select>
                </div>

                <div class="col-md-6"> 

                    <label for="status" class="form-label">Status</label> 
                    <div class="form-check">
                      <label class="form-check-label" for="">
                        Etat
                      </label>
                      <input class="form-check-input" type="checkbox" name="status" <?= $status_admin == '0' ? '':'checked'?>  value="" id="">

                    </div>

                </div>

                <!-- <div class="col-md-4"> 
                    <label for="photo" class="form-label text-black-50">Ancien image</label>
                    <div class="">
                        <?php 
                            ?>
                                <img class="rounded" src="<?= $profile ?>" width="70" height="70"> 
                            <?php
                        ?>
                        <input type="hidden" value="assets/img/users_image/<?= $profile?>" name="old_image">
                    </div>
                </div> -->

                <!-- <div class="col-md-8 hide-text"> 
                    <label for="file"  class="form-label">Photo</label> 
                    <input type="hidden" class="form-control"   name="file" id="file">
                </div> -->
                
                
                <div class=" text-end">
                    <button type="submit" name="update_admin_btn" class="btn btn-success">
                        <i class="bi bi-upload me-1"></i>Modifier
                    </button> 
            </form>
            
        </div>
    </div>
</section>

<?php

    if(isset($_POST['update_admin_btn'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        //$password = $_POST['password'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $status = isset($_POST['status']) ? '1':'0' ;

        // $target="assets/img/avatars/profile/".basename($_FILES['file']['name']);

        
        $query = $admin->update_profile($id,$username,$email,$phone,$role,$status);

        if($query){

            move_uploaded_file($_FILES["file"]["tmp_name"],$target);
            redirect('dashboard.php?page=pages/users/admin/index','Data Updated Successfully');

        }else{
            error('dashboard.php?page=pages/users/admin/profile','Something went wrong!');            
        }

    }
?>
