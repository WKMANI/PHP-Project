<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="icon" href="images/emobilis.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
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
    <h3 class="text-center">Enquiries</h3>
</div>
<br>
<div class="container">
    <?php

    $conn = mysqli_connect("localhost", "root", "", "emobilis");

    if(!$conn){
        die("Connection Error :". mysqli_error());
    }
$studentID = mysqli_real_escape_string($conn, $_POST['student_ID']);
    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $otherName = mysqli_real_escape_string($conn,$_POST['oName']);
    $course = mysqli_real_escape_string($conn,$_POST['course']);
    $tuitionFees = mysqli_real_escape_string($conn,$_POST['tFees']);
    $regFees = mysqli_real_escape_string($conn,$_POST['rFees']);
    $accFees = mysqli_real_escape_string($conn,$_POST['aFees']);
    $libFees = mysqli_real_escape_string($conn,$_POST['lFees']);
    $total = mysqli_real_escape_string($conn,$_POST['tAmount']);
    $amountPaid = mysqli_real_escape_string($conn,$_POST['aPaid']);
    $outstandingBal = mysqli_real_escape_string($conn,$_POST['outstanding']);

    $sql= "INSERT INTO `receipts`( `receipt_number`, `receipt_date`, `student_ID`, `first_name`, `other_name`, `course`, `tuition_fees`, `registration_fees`, `accommodation_fees`, `library_fees`, `total_amount`, `amount_paid`, `outstanding_balance`)
 VALUES (null, null,'$studentID','$firstName','$otherName','$course','$tuitionFees','$regFees','$accFees','$libFees','$total','$amountPaid','$outstandingBal')";

    if($conn->query($sql)==true){
        echo "<p>Receipt details added successfully.</p>";
        echo "<a href='receipt.php' class='btn btn-success'>Add receipt</a>";
    }
    else{
        echo "Receipt details not added successfully.".mysqli_error();
        echo "<a href='receipt.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
