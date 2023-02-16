<?php
    session_start();
    include '../config/dbconnection.php';

    if(isset($_POST['register_user_btn'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $Conf_password = $_POST['conf_password'];
        $role = $_POST['role'];
        $status = $_POST['status'];
        $country = $_POST['country'];
        $addrun_querys = $_POST['address'];
        
        $image =$_FILES['file']['name'];
        $encrypty_password = password_hash($password, PASSWORD_BCRYPT);

        $sql="SELECT * FROM users WHERE email = '$email' ";
        $query = $dbconnection->prepare($sql);
        $query->execute();

        if($query->rowCount()>0){

            $_SESSION['error'] = "Email that you have entered is already exist!";
            header('Location: ../admin/index.php?page=pages/users/admins/create-user');

        }else{

            if( $password == $Conf_password ){

                $query = "INSERT INTO users (fname,lname,email,contact_no,country,address,password,role_as,status,image,created_at) 
                            VALUES ('$fname','$lname','$email','$phone','$country','$address','$encrypty_password','$role','$status','$image',Now())";
                $query_run = $dbconnection->prepare($query);
                $query_execute = $query_run->execute();
                
                if($query_execute){
                    move_uploaded_file($_FILES["file"]["tmp_name"],"../assets/img/avatars/profile/".basename($_FILES['file']['name']));
                    $_SESSION['message'] = "Data inserted Successfully";
                    header('Location: ../admin/index.php?page=pages/users/admins/index');

                }
                else{
                    $_SESSION['error'] = "Something went wrong.";
                    header('Location: ../admin/index.php?page=pages/users/admins/create-user');            
                }

            }else{

                $_SESSION['error'] = "Password do not match.";
                header('Location: ../admin/index.php?page=pages/users/admins/create-user'); 

            }
        }
        
    }
    else if(isset($_POST['login_btn'])){

        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        // $encrypty_password = password_hash($password, PASSWORD_BCRYPT);
        $encrypty_password = $password;
  
        $query = " SELECT * FROM users WHERE email = '$email' AND password = '$encrypty_password' LIMIT 1 ";
        $run_query = mysqli_query($con, $query);
        $row_count = mysqli_num_rows($run_query);
  
        if(mysqli_num_rows($run_query) > 0){
            
            $_SESSION['auth'] = true;
            
            $userdata = mysqli_fetch_array($run_query);
            $userID = $userdata['id'];
            $useremail = $userdata['email'];
            $userfname = $userdata['fname'];
            $userlname = $userdata['lname'];
            $userpassword = $userdata['password'];
            $status = $userdata['status'];
            $role_as = $userdata['role_as'];
            $image = $userdata['image'];

            $_SESSION['auth_user'] = [
                'id' => $userID,
                'fname' => $userfname,
                'lname' => $userlname,
                'email' => $useremail,
                'role' => $role_as,
                'image' => $image,
            ];

            $_SESSION['message'] = "Logged In Successfully.";
            header('Location: ../index.php');  
            // header('Location: ../admin/index.php');  

            /* if( password_verify($encrypty_password, $userpassword)){

                $_SESSION['user_id'] = $userID;
                $_SESSION['role_as'] = $role_as;
                $_SESSION['status'] = $status;
    
                if( $role_as == 1 || $role_as == 2  ){
                
                    $_SESSION['message'] = "Logged In Successfully.";
                    header('Location: ../admin/index.php');  
    
                }else{
                    $_SESSION['error'] = "Logged In Successfully.";
                    header('Location: index.php'); 
                }
    
            
            }else{
                $_SESSION['error'] = "Incorrect email or password!";
                header('Location: ../login.php'); 
            } */

            

        }else{
            $_SESSION['error'] = "Invalid Credentials.";
            header('Location: ../login.php'); 
        }

    }

?>
