<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Details</title>
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
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="staffDetailsHandler.php" method="post">
                <label for=""><b>ID Number</b></label>
                <input type="text" name="idNo" class="form-control" placeholder="* ID Number Here" required>
                <br>
                <label for=""><b>First Name</b></label>
                <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required>
                <br>
                <label for=""><b>Middle Name</b></label>
                <input type="text" name="mName" class="form-control" placeholder="* Middle Name Here" required>
                <br>
                <label for=""><b>Last Name</b></label>
                <input type="text" name="lName" class="form-control" placeholder="* Last Name Here" required>
                <br>
                <label for=""><b>Gender</b></label>
                <br>
                <select name="genDer" id="genDer">
                    <option value="">****Select Gender****</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <br>

                <br>
                <label for=""><b>Position</b></label>
                <input type="text" name="posiTion" class="form-control" placeholder="* Position Here" required>

                <br>
                <label for=""><b>Department</b></label>
                <input type="text" name="depT" class="form-control" placeholder="* Department Here" required>
                <br>
                <label for=""><b>Join Date</b></label>
                <br>
                <input type="date" name="date" class="form-control" required>
                <br>
                <br>
                <div class="buttons">
                    <button class="btn btn-success" type="submit">Add New</button>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

</body>
</html>
