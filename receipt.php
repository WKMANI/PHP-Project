<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipts</title>
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
    <h3 class="text-center">Receipt Details</h3>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="con-sm-6">
            <form action="receiptHandler.php" method="post">
                <label for="">Student ID</label>
                <br>
                <input type="text" name="student_ID" class="form-control" placeholder="* Student ID Here" required>
                <br>
                <label for="">First Name</label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="* First Name Here" requiored>
                <br>
                <label for="">Other Name</label>
                <br>
                <input type="text" name="oName" class="form-control" placeholder="* Other Name Here" required>
                <br>
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
                <label for="">Tuition Fees</label>
                <br>
                <input type="number" name="tFees" class="form-control" placeholder="* Tuition Fees" required>
                <br>
                <label for="">Registration Fees</label>
                <br>
                <input type="number" name="rFees" class="form-control" placeholder="* Registration Fees" required>
                <br>
                <label for="">Hostel/Accommodation Fees</label>
                <br>
                <input type="number" name="aFees" class="form-control" placeholder="* Accommodation Fees" required>
                <br>
                <label for="">Library Fees</label>
                <br>
                <input type="number" name="lFees" class="form-control" placeholder="* Library Fees" required>
                <br>
                <label for="">Total Amount</label>
                <br>
                <input type="number" name="tAmount" class="form-control" placeholder="* Total Amount" required>
                <br>
                <label for="">Amount Paid</label>
                <br>
                <input type="number" name="aPaid" class="form-control" placeholder="* Amount Paid" required>
                <br>
                <label for="">Outstanding Balance</label>
                <br>
                <input type="number" name="outstanding" class="form-control" placeholder="* Outstanding Balance" required>
                <br>
                <div class="buttons">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
                <br>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>