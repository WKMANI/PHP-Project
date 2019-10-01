<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill Report Details</title>
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
    <h3 class="text-center">Invoice Report</h3>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="billReport.php" method="post">
                <label for="">Student ID</label>
                <br>
                <input type="text" class="form-control" placeholder="* Student ID Here">
                <br>
                <label for="">Invoice Date From</label>
                <br>
                <input type="date" name="invoiceDateFrm" class="form-control" required>
                <br>
                <label for="">Invoice Date To</label>
                <br>
                <input type="date" name="invoiceDateTo" class="form-control" required>
                <br>
                <div class="buttons">
                    <button class="btn btn-primary" type="submit">View Report</button>
                </div>

            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>

</div>
</body>
</html>
