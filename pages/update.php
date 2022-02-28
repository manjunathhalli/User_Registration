<?php
include "../database/connection.php";
include "updatefunction.php";

?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body>
    <style></style>

    <div id="box">
        <form method="post">
            <div style="font-size: 20px; margin: 10px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp UPDATE</div>
            FirstName <input id="text" type="text" name="first_name" value=<?php echo $first_name;?>><br>
            LastName <input id="text" type="text" name="last_name" value=<?php echo $last_name;?>><br>
            Password <input id="text" type="password" name="password"value=<?php echo $password;?>><br>
            Email id <input  id="text" type="email" name="email" value=<?php echo $email;?>><br>
            Mobile Number<input  id="text" type="text" name="mobile_number"value=<?php echo $mobile_number;?>><br>
            <input id="button" type="submit" name="submit"><br>
           
        </form>
    </div>
    
</body>

</html>