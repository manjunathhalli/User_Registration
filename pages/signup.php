 <?php
    include "../database/connection.php";
    include("functions.php");
    include("signupfunctions.php");
    include ("validation.php")
    
?>
 <!DOCTYPE html>
 <html>

 <head>
     <title>Signup</title>
     <link rel="stylesheet" href="../css/signup.css">
 </head>

 <body>
     <style></style>
     <script>
     </script>
     <div id="box">
     <span style="color:red"><?php echo  $error; ?></span>
     <span style="color:blue"><?php echo  $p_error; ?></span>
         <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" target="_self">
             <div style="font-size: 20px; margin: 10px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                 &nbsp SIGNUP</div>
             Enter FirstName <input id="text" type="text" name="first_name">
             <span style="color:red"><?php echo  $first_name_err; ?></span><br>
             Enter LastName <input id="text" type="text" name="last_name">
             <span style="color:red"><?php echo  $last_name_err; ?></span><br>
             Enter Password <input id="text" type="password" name="password">
             <span style="color:red"><?php echo  $password_err; ?></span><br>
             Confirm password <input id="text" type="password" name="confirm_password">
             <span style="color:red"><?php echo  $confirm_password_err; ?></span><br>
             Email id <input type id="text" type="email" name="email">
             <span style="color:red"><?php echo  $email_err; ?></span><br>
             Mobile Number<input type id="text" type="number" name="mobile_number">
             <span style="color:red"><?php echo  $mobile_number_err; ?></span><br>

             <input id="button" type="submit" value="Signup" name="submit"><br><br>

             <a href="login.php">Click to Login</a><br><br>
         </form>
     </div>
 </body>

 </html>