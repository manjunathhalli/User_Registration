<?php
session_start();
include "../database/connection.php";
include("functions.php");

$user_data = cheak_login($con);
$q = "select * from user";
$query = mysqli_query($con, $q);

?>
<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <h1 class="text-center"> Welcome to the User Registration website &nbsp&nbsp&nbsp&nbsp&nbsp <button class="btn-primary btn"><a href="signup.php" class="text-white">LOGOUT</h1></button>
    </a></h1>

    <br>

    </div>
    <div class="container">
        <div class="col-lg-12">
          
            <h1 class="text-warning text-center">Display Table Data</h1>
            <br>
            <table class=" table table-striped table-hover table-bordered">
                <tr>
                    <th>Id</th>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Mobile_number</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>

                <?php
                include "../database/connection.php";


                $q = "select * from user";
                $query = mysqli_query($con, $q);

                while ($res = mysqli_fetch_array($query)) {

                ?>
                    <tr>
                        <td><?php echo $res['id'] ?> </td>
                        <td><?php echo $res['first_name'] ?></td>
                        <td><?php echo $res['last_name'] ?> </td>
                        <td><?php echo $res['email'] ?> </td>
                        <td><?php echo $res['password'] ?> </td>
                        <td><?php echo $res['mobile_number'] ?> </td>
                        <td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button> </td>
                        <td> <button class="btn-danger btn"><a href="update.php?updateid='.$id.'" class="text-white">Update</a></button> </td>
                    </tr>
                <?php
                }
                ?>

            </table>


        </div>
    </div>



</body>

</html>