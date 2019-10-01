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
        die("Connection Error: ". mysqli_error());
    }
    $studentID = mysqli_real_escape_string($conn,$_POST['student_ID']);

    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $otherName = mysqli_real_escape_string($conn,$_POST['oName']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $dateBirth = mysqli_real_escape_string($conn,$_POST['dob']);
    $postAddress = mysqli_real_escape_string($conn,$_POST['pAddress']);
    $telPhone = mysqli_real_escape_string($conn,$_POST['tPhone']);
    $eMail = mysqli_real_escape_string($conn,$_POST['eMail']);
    $nextKin = mysqli_real_escape_string($conn,$_POST['kinName']);
    $kinNumber = mysqli_real_escape_string($conn,$_POST['kinNumber']);
    $courseEnroll = mysqli_real_escape_string($conn,$_POST['course']);
    $highSchool = mysqli_real_escape_string($conn,$_POST['highSchl']);
    $highSchYearFrm = mysqli_real_escape_string($conn,$_POST['highSchYearFrm']);
    $highSchYearTo = mysqli_real_escape_string($conn,$_POST['highSchYearTo']);
    $grade = mysqli_real_escape_string($conn,$_POST['grade']);
    $edLevel = mysqli_real_escape_string($conn,$_POST['edLevel']);
    $uniColl = mysqli_real_escape_string($conn,$_POST['uniColl']);
    $uniYearFrom = mysqli_real_escape_string($conn,$_POST['uniYearFrom']);
    $uniYearTo = mysqli_real_escape_string($conn,$_POST['uniYearTo']);

    $sql = "INSERT INTO `registration`(`studentAdm_No`, `student_ID`, `reg_date`, `first_name`, `other_name`, `gender`, `dob`, `post_address`, `telephone_No`, `email`, `next_of_kin_name`, `next_of_kin_number`, `course_enrolled`, `highschool`, `highSch_year_from`, `highSch_year_to`, `KCSE_Grade`, `education_level`, `coll_uni_attended`, `year_from`, `year_to`)
VALUES (null, '$studentID',null ,'$firstName','$otherName','$gender','$dateBirth','$postAddress','$telPhone','$eMail','$nextKin','$kinNumber','$courseEnroll',
'$highSchool','$highSchYearFrm','$highSchYearTo','$grade','$edLevel','$uniColl','$uniYearFrom','$uniYearTo')";

    if ($conn->query($sql)==true){
        echo "<p>Registration successful.</p>";
        echo "<a href='registration.php' class='btn btn-success'>New Registration</a>";
    }

    else{
        echo "<p>Registration not successful.</p>";
        echo "<a href='registration.php' class='btn btn-outline-danger'>Try Again</a>";
    }

    mysqli_close($conn);
    ?>
</div>
</body>
</html>
