<?php
function test_input($data)
    {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $first_name = $last_name = $password = $confirm_password = $email = $mobile_number = "";
    $first_name_err = $last_name_err = $password_err = $confirm_password_err = $email_err = $mobile_number_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["first_name"])) {
            $first_name_err = "first name cannot be left blank.";
        } else {
            $first_name = test_input($_POST["first_name"]);
            if (!preg_match("/^[A-Z][a-z]{2,}$/", $first_name)) {
                $first_name_err = "First letter cap and minimum 2 char";
            }
        }
        if (empty($_POST["last_name"])) {
            $last_name_err = "last name cannot be left blank.";
        } else {
            $last_name = test_input($_POST["last_name"]);
            if (!preg_match("/^[A-Z][a-z]{2,}$/", $last_name)) {
                $last_name_err = "First letter cap and minimum 2 char";
            }
        }
        if (empty($_POST["password"])) {
            $password_err = "password cannot be left blank.";
        } else {
            $password = test_input($_POST["password"]);
            if (!preg_match("/^(?=.*[A-Z])(?=.*[0-9])(?=.*[@$!%*#?&])([a-zA-Z0-9@$!%*#?&]){8,}$/", $password)) {
                $password_err = "Enter valid password";
            }
        }
        if (empty($_POST["confirm_password"])) {
            $confirm_password_err = "confirm password cannot be left blank.";
        } else {
            $confirm_password = test_input($_POST["confirm_password"]);
            if (!preg_match("/^(?=.*[A-Z])(?=.*[0-9])(?=.*[@$!%*#?&])([a-zA-Z0-9@$!%*#?&]){8,}$/", $confirm_password)) {
                $confirm_password_err = "Enter valid password";
            }
        }
        if (empty($_POST["email"])) {
            $email_err = "email cannot be left blank.";
        } else {
            $email = test_input($_POST["email"]);
            if (!preg_match("/^[a-zA-Z0-9]+([._+-]*[0-9A-Za-z]+)*@[a-zA-Z0-9]+.[a-zA-Z]{2,4}([.][a-z]{2,4})?$/", $email)) {
                $email_err = "Enter valid email";
            }
        }
        if (empty($_POST["mobile_number"])) {
            $mobile_number_err = "mobile number cannot be left blank.";
        // } else {
        //     $mobile_number = test_input($_POST["mobile_number"]);
        //     if (!preg_match("/^[+]?[1-9][0-9]{9,14}$/", $mobile_number)) {
        //         $mobile_number_err = "Enter valid number";
        //     }
        }
    }
    ?>