<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Outstanding Balance Report</title>
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
    <h3 class="text-center">Outstanding Report Details</h3>
</div>
<br>
<div class="container">
    <?php

    $conn = mysqli_connect("localhost", "root", "", "emobilis");

    if(!$conn){
        die("Connection Error : ".mysqli_connect_error());
    }

    $course = mysqli_real_escape_string($conn,$_POST['course']);
    $dateFrom = mysqli_real_escape_string($conn,$_POST['OdateFrom']);
    $dateTo = mysqli_real_escape_string($conn,$_POST['OdateTo']);
    $result = mysqli_query($conn,"SELECT * FROM receipts WHERE course = '$course' or receipt_date >='$dateFrom' and receipt_date='$dateTo' and outstanding_balance > 0");

    echo "<table class='table table-bordered table-striped table-responsive-sm'>
<tr>
<th>Student ID</th>
<th>First Name</th>
<th>Other Name</th>
<th>Course</th>
<th>Total Invoice</th>
<th>Amount Paid</th>
<th>Outstanding Balance</th>
</tr>";

    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>". $row['student_ID']."</td>";
        echo "<td>". $row['first_name']."</td>";
        echo "<td>". $row['other_name']."</td>";
        echo "<td>". $row['course']."</td>";
        echo "<td>". $row['total_amount']."</td>";
        echo "<td>". $row['amount_paid']."</td>";
        echo "<td>". $row['outstanding_balance']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
    ?>

</div>
</body>
</html>
