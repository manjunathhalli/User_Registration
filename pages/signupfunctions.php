<?php

$password=$confirm_password="";
$error=$p_error="";
if (isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $email = $_POST['email'];
        $mobile_number = $_POST['mobile_number'];

        if ($password != $confirm_password) {

            $error= "Password Don't Match";

        } else {
            $p_error ="Thanks For Registration";
          

        }
    }

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        //save to database
        $user_id = random_num(20);
        $q  = "insert into user (user_id,first_name,last_name,email,password,mobile_number) values('$user_id','$first_name','$last_name','$email','$password','$mobile_number')";
        mysqli_query($con, $q);
      
    }
    ?>