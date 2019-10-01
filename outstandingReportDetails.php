<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Outstanding Balance Report Details</title>
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
    <h3 class="text-center">Outstanding Balance Report Details</h3>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="outstandingReport.php" method="post">
                <label for="">Course</label>
                <br>
                <select name="course" id="">
                    <option value="">****Select Course****</option>
                    <option value="MIT">MIT</option>
                    <option value="ANDROID">Android</option>
                    <option value="DIGITAL SKILLS FOR AFRICA">Digital Skills for Africa</option>
                    <option value="Laravel">Laravel</option>
                    <option value="Oracle">Oracle</option>
                    <option value="HTML 5">HTML 5</option>
                    <option value="Python">Python</option>
                    <option value="USSD">USSD</option>
                    <option value="Cyber Security">Cyber Security</option>
                </select>
                <br>
                <br>
                <label for="">Date From</label>
                <br>
                <input type="date" name="OdateFrom" class="form-control" required>
                <br>
                <label for="">Date To</label>
                <br>
                <input type="date" name="OdateTo" class="form-control" required>
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
