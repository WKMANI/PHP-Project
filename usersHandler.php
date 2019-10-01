<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="icon" href="images/emobilis.jpg">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/js/jquery-3.4.1.js">
    <link rel="stylesheet" href="bootstrap/js/popper.min.js">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js">
</head>
<body>
<br>
<div class="logo">
    <img src="images/emobilis.jpg" alt="Logo" width="224" height="103">
</div>
<br>
<div class="heading">
    <h3 class="text-center">Staff Details</h3>
</div>
<br>
<div class="container">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "emobilis");

    if (!$conn){
        die("Connection Error: ".mysqli_connect_error());
    }

    $fName = mysqli_real_escape_string($conn, $_POST['fName']);
    $mName = mysqli_real_escape_string($conn, $_POST['mName']);
    $lName = mysqli_real_escape_string($conn, $_POST['lName']);
    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
    $uName = mysqli_real_escape_string($conn, $_POST['uName']);
    $pass = mysqli_real_escape_string($conn, $_POST['pWord']);
    $userGrp = mysqli_real_escape_string($conn, $_POST['uGroup']);

    $sql ="INSERT INTO `users`(`user_ID`, `first_name`, `middle_name`, `last_name`, `department`, `username`, `password`, `user_group`) 
VALUES (null ,'$fName','$mName','$lName','$dept','$uName','$pass','$userGrp')";

    if ($conn->query($sql)==true){
        echo "<p>New user added successfully.</p>";
        echo "<a href='users.php' class='btn btn-info'>New User</a>";
    }
    else{
        echo "<p>User not added.</p>";
        echo "<a href='staffDetails.php' class='btn btn-danger'>Try Again</a>";
    }

    mysqli_close($conn);
    ?>
</div>
</body>
</html>