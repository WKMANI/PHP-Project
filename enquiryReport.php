<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiry Report</title>
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

    if (!$conn){
        die("Connection Error : ".mysqli_connect_error());
    }

    $course = mysqli_real_escape_string($conn,$_POST['course']);
    $dateFrom = mysqli_real_escape_string($conn, $_POST['enquiryDateFrm']);
    $dateTo = mysqli_real_escape_string($conn, $_POST['enquiryDateTo']);
    $result = mysqli_query($conn, "SELECT * FROM `enquiries` WHERE course = '$course' or enquiry_Date>='$dateFrom' and enquiry_Date<='$dateTo'");

    echo "<table class='table table-bordered table-striped table-responsive-sm'>
<tr>
<th>First Name</th>
<th>Other Name</th>
<th>Telephone Number</th>
<th>Email</th>
<th>Course</th>
<th>Source</th>
<th>Comments</th>
</tr>";

    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>". $row['first_name']."</td>";
        echo "<td>". $row['other_name']."</td>";
        echo "<td>". $row['telephone_number']."</td>";
        echo "<td>". $row['email']."</td>";
        echo "<td>". $row['course']."</td>";
        echo "<td>". $row['source']."</td>";
        echo "<td>". $row['comments']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
    ?>
</div>
<div class="button">
    <a class="btn btn-primary" href="">Back to report details</a>
</div>

</body>
</html>
