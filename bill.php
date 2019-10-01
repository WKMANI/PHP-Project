
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing</title>
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
    <h3 class="text-center">Billing</h3>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="billHandler.php" method="post">
                <label for="">Invoice Date</label>
                <br>
                <input type="date" name="invoice_date" class="form-control" required>
                <br>
                <label for="">Student ID</label>
                <br>
                <input type="text" name="student_ID" class="form-control" placeholder="* Student ID Here" required>
                <br>
                <label for="">First Name</label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required>
                <br>
                <label for="">Other Name</label>
                <br>
                <input type="text" name="oName" class="form-control" placeholder="* Other Name Here" required>
                <br>
                <label for="">Course</label>
                <br>
                <input type="text" name="course" class="form-control" placeholder="* Course Here" required>
                <br>
                <label for="">Tuition Fees</label>
                <br>
                <input type="number" name="tFees" class="form-control" placeholder="* Tuition Fees Here" required>
                <br>
                <label for="">Registration Fees</label>
                <br>
                <input type="number" name="rFees" class="form-control" placeholder="* Registration Fees Here" required>
                <br>
                <label for="">Hostel/Accommodation Fees</label>
                <br>
                <input type="number" name="aFees" class="form-control" placeholder="* Accommodation Fees Here">
                <br>
                <label for="">Library Fees</label>
                <br>
                <input type="number" name="lFees" class="form-control" placeholder="* Library Fees Here">
                <br>
                <label for="">Total Amount</label>
                <br>
                <input type="number" name="tAmount" class="form-control" placeholder="* Total Amount Here">
                <br>
                <div class="buttons">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
