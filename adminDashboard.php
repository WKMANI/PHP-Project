<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator Dashboard</title>
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
    <h3 class="text-center">Administrator</h3>
</div>
<br>
<nav class="navbar navbar-expand-sm bg-white navbar-light">
    <a class="navbar-brand" href="">
        <img src="images/emobilis.jpg" alt="Logo" width="100" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Registrations</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="registration.php">Registrations</a>
                    <a class="dropdown-item" href="registrationRepDetails.php">Registrations Reports</a>
                </div>

            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Enquiries</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="enquiry.php">Enquiries </a>
                    <a class="dropdown-item" href="enquiryReportDetails.php">Enquiries Report</a>
                </div>
            </li>

        </ul>
    </div>
</nav>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="buttons">
        <a href="logout.php" class="btn btn-outline-success">Logout</a>
    </div>

</div>
</body>
</html>
