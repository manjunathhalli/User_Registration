<?php
include "../database/connection.php";
$id = $_GET['updateid'];
$q = "Select * from user where id =$id";
$query=mysqli_query($con, $q);
$row = mysqli_fetch_assoc($query);
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$password = $row['password'];
$email = $row['email'];
$mobile_number = $row['mobile_number'];

if (isset($_POST['submit'])) {

    $first_Name = $_POST['first_name'];
    $last_Name = $_POST['last_name'];
    $password = $_POST['password'];
    //$confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $q = "update user set id=$id, first_name='$first_name',last_name='$last_name',password='$password',email='$email', mobile_number=$mobile_number where id=$id";

     $query = mysqli_query($con, $q);
    header("location:index.php");
}
