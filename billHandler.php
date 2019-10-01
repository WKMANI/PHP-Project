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
    <h3 class="text-center">Success</h3>
</div>
<br>
<div class="container">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "emobilis");

    if (!$conn){
        die("Connection Error: ".mysqli_connect_error());
    }

    $invDate = mysqli_real_escape_string($conn, $_POST['invoice_date']);
    $fName = mysqli_real_escape_string($conn, $_POST['fName']);
    $oName = mysqli_real_escape_string($conn, $_POST['oName']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $tFees = mysqli_real_escape_string($conn, $_POST['tFees']);
    $rFees = mysqli_real_escape_string($conn, $_POST['rFees']);
    $aFees = mysqli_real_escape_string($conn, $_POST['aFees']);
    $lFees = mysqli_real_escape_string($conn, $_POST['lFees']);
    $total = mysqli_real_escape_string($conn, $_POST['tAmount']);

    $sql = "INSERT INTO `billing`(`studentAdmNo`, `invoice_No`, `invoice_Date`, `first_name`, `other_names`, `course`, `tuition_fees`, `registration_fees`, `accommodation_fees`, `library_fees`, `total_amount`) 
VALUES (null,null ,'$invDate','$fName','$oName','$course','$tFees','$rFees','$aFees','$lFees','$total')";

    if ($conn->query($sql)==true){
        print "<p>Billing information added successfully</p>";
        print "<a href='bill.php' class='btn btn-primary'>Add another bill</a>";
    }
    else{
        print "<p>Billing information not added successfully</p>";
        print "<a href='bill.php' class='btn btn-danger'>Try Again</a>";
    }

    mysqli_close($conn);
    ?>
</div>
</body>
</html>
