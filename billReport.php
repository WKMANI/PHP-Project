<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill Report</title>
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
    <h3 class="text-center">Enquiry Report</h3>
</div>
<br>
<div class="container">
    <?php

    $conn = mysqli_connect("localhost", "root", "", "emobilis");

    if(!$conn){
        die ("Connection Error : ". mysqli_connect_error());
    }

    $studentID = mysqli_real_escape_string($conn,$_POST['student_ID']);
    $dateFrom = mysqli_real_escape_string($conn, $_POST['invoiceDateFrm']);
    $dateTo = mysqli_real_escape_string($conn, $_POST['invoiceDateTo']);
    $result = mysqli_query($conn, "SELECT * FROM billing WHERE student_ID = '$studentID' or invoice_Date >= '$dateFrom' and invoice_date <= '$dateTo'");

    echo "<table class='table table-bordered table-striped table-responsive-sm'>

<tr>
<th>Invoice Number</th>
<th>Student ID</th>
<th>First Name</th>
<th>Other Name</th>
<th>Course</th>
<th>Tuition Fees</th>
<th>Registration Fees</th>
<th>Accommodation Fees</th>
<th>Library Fees</th>
<th>Total Amount</th>
</tr>";

    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>". $row['invoice_No']."</td>";
        echo "<td>". $row['student_ID']."</td>";
        echo "<td>". $row['first_name']."</td>";
        echo "<td>". $row['other_names']."</td>";
        echo "<td>". $row['course']."</td>";
        echo "<td>". $row['tuition_fees']."</td>";
        echo "<td>". $row['registration_fees']."</td>";
        echo "<td>". $row['accommodation_fees']."</td>";
        echo "<td>". $row['library_fees']."</td>";
        echo "<td>". $row['total_amount']."</td>";
        echo "</tr>";
    }

    echo "</table>";
    mysqli_close($conn);

    ?>
</div>
</body>
</html>
