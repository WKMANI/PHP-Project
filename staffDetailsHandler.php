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
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
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

    if(!$conn){
        die ("Connection Error: ".mysqli_connect_error());
    }
    $idNo = mysqli_real_escape_string($conn,$_POST['idNo']);
    $fName = mysqli_real_escape_string($conn,$_POST['fName']);
    $mName = mysqli_real_escape_string($conn,$_POST['mName']);
    $lName = mysqli_real_escape_string($conn,$_POST['lName']);
    $gender = mysqli_real_escape_string($conn,$_POST['genDer']);
    $position = mysqli_real_escape_string($conn, $_POST['posiTion']);
    $dept = mysqli_real_escape_string($conn,$_POST['depT']);
    $date = mysqli_real_escape_string($conn,$_POST['date']);

    $sql = "INSERT INTO `staf_details`(`staff_ID`, `id_No`, `first_name`, `middle_name`, `last_name`, `gender`, `position`, `department`, `join_date`) 
VALUES (null ,'$idNo','$fName','$mName','$lName','$gender','$position','$dept','$date')";

    if ($conn->query($sql)==true){
        print "<p>New staff added successfully</p>";
        print "<a href='staffDetails.php' class='btn btn-info'>New Staff</a>";
    }
    else{
        print "<p>New staff not added successfully</p>";
        print "<a href='staffDetails.php' class='btn btn-danger'>Try Again</a>";
    }

    mysqli_close($conn);
    ?>
</div>
