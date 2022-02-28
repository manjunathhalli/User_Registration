<?php


$email=$password="";
$error="";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

//somethomg was posted
$email = $_POST["email"];
$password =  $_POST["password"];


if (!empty($email) && !empty($password) && !is_numeric($email)) {
    //read from  database

    $query = "select * from user where email = '$email' limit 1";

    $result = mysqli_query($con, $query);

    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] === $password) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
        }
    }
    $error = "wrong username and password";
   // echo "wrong username and password";
} else {

    $error = "wrong username and password";
}
}