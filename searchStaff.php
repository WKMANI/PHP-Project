<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Staff</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/emobilis.jpg">
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
    <h3 class="text-center">Search Staff</h3>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="searchStaffU.php" method="post">
                <input type="text" name="idNo" class="form-control" placeholder="* ID Number Here">
                <br>
                <div class="buttons">
                    <button class="btn btn-success">Search</button>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>