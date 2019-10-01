<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/emobilis.jpg">
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

    if(!$conn){
        die("Connection Error :".mysqli_connect_error());
    }
    $fName = mysqli_real_escape_string($conn, $_POST['fName']);
    $oName = mysqli_real_escape_string($conn, $_POST['oName']);
    $tPhone = mysqli_real_escape_string($conn, $_POST['tPhone']);
    $eMail = mysqli_real_escape_string($conn, $_POST['eMail']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $source = mysqli_real_escape_string($conn, $_POST['source']);
    $coMMents = mysqli_real_escape_string($conn, $_POST['comments']);

    $sql = "INSERT INTO `enquiries`(`enquiry_ID`, `enquiry_Date`, `first_name`, `other_name`, `telephone_number`, `email`, `course`, `source`, `comments`) 
VALUES (null,null ,'$fName','$oName','$tPhone','$eMail','$course','$source','$coMMents')";

    if ($conn->query($sql)==true){
        print "<p>Enquiry progressed successfully</p>";
        print "<a href='enquiry.php' class='btn btn-info'>Another Enquiry</a>";
    }
    else{
        print "<p>Enquiry not submitted</p>".mysqli_error($conn);
        print "<a href='enquiry.php' class='btn btn-danger'>Try again</a>";
    }

    mysqli_close($conn);
    ?>
</div>
</body>
</html>
