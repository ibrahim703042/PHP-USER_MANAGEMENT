<?php

    include '../config/dbconnection.php';

    if(isset($_POST['register_user_btn'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $contact_no = $_POST['phone'];
        $password = $_POST['password'];
        $Conf_password = $_POST['conf_password'];
        $role = $_POST['role'];
        $status = isset($_POST['status']) ? '1':'0' ;
        
        $image =$_FILES['file']['name'];

        $sql="SELECT * FROM users WHERE email = '$email' ";
        $query = $dbconnection->prepare($sql);
        $query->execute();

        if($query->rowCount()>0){

            $_SESSION['message'] = "Password do not match";
            header('Location: ../index.php?page=register');
            //error('../index.php?page=register','Email that you have entered is already exist!');
        }

        if($password == $Conf_password){
            
            //insert user data
            // move_uploaded_file($_FILES["file"]["tmp_name"],"../../assets/img/avatars/profile/".basename($_FILES['file']['name']));
            move_uploaded_file($_FILES["file"]["tmp_name"],"../assets/img/avatars/profile/".basename($_FILES['file']['name']));
            
            $insert_query= $user->create($fname,$lname,$email,$contact_no,$password,$role,$status,$image);
            
            if($insert_query){
                $_SESSION['message'] = "Registered Successfully";
                header('Location: ../login.php');
                //redirect('../login.php','Data insert Successfully');

            }
        }else{
            $_SESSION['message'] = "Password do not match";
            header('Location: ../index.php?page=register');
        }

    } 

?>