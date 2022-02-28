<?php
session_start();
include("../database/connection.php");
include("functions.php");
include("loginfunctions.php");



?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div id="box">
        <form method="post">
            <span style="color:red"><?php echo $error; ?></span><br>
            <div style="font-size: 20px; margin: 10px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp LOGIN</div>
            Enter email id <input type id="text" type="email" name="email"><br><br>
            Password<input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Login"><br><br>

            <a href="signup.php">Click to Signup</a><br><br>
        </form>
    </div>
</body>

</html>