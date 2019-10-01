<?php

session_start();

if(isset($_POST['submit'])){

    $conn = mysqli_connect("localhost","root","","emobilis");
    if (!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }

    $userName = mysqli_real_escape_string($conn,$_POST['uName']);
    $passWord = mysqli_real_escape_string($conn,$_POST['pWord']);
    $userGroup = mysqli_real_escape_string($conn,$_POST['uGroup']);

    $qry=mysqli_query($conn,"SELECT * FROM users WHERE username='$userName' AND password='$passWord' AND user_group='$userGroup'");
    $row = mysqli_fetch_assoc($qry);
    $active = $row['active'];

    $count = mysqli_num_rows($qry);

    // If result matched $username,$password and $department, table row must be 1 row

    if($count == 1) {

        if(!empty($userName) && !empty($passWord) && $userGroup=='Systems Administrator'){
            header("LOCATION:sysAdminDashboard.php");
        }

        else if(!empty($userName) && !empty($passWord) && $userGroup=='Administrator'){
            header("LOCATION:adminDashboard.php");
        }

        else if(!empty($userName) && !empty($passWord) && $userGroup=='Front office'){
            header("LOCATION:frontOfficeDashboard.php");
        }

        else if(!empty($userName) && !empty($passWord) && $userGroup=='Accounts'){
            header("LOCATION:accountsDashboard.php");
        }

        else if(!empty($userName) && !empty($passWord) && $userGroup=='Management'){
            header("LOCATION:managementDashboard.php");
        }

    }else {
        header("LOCATION:login_error.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="images/emobilis.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
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
    <h3 class="text-center">Login</h3>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="post" action="">
                <label for=""><b>Username</b></label>
                <br>
                <input type="text" name="uName" class="form-control" placeholder="* Username Here" required>
                <br>
                <label for=""><b>Password</b></label>
                <br>
                <input type="password" name="pWord" class="form-control" placeholder="* Password Here" required>
                <br>
                <label for=""><b>User Group</b></label>
                <br>
                <select name="uGroup" id="">
                    <option value="">****Select Group****</option>
                    <option value="Systems Administrator">Systems Administrator</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Front office">Front office</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Management">Management</option>
                </select>
                <br>
                <br>
                <div class="buttons">
                    <button class="btn btn-primary" name="submit" type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

</body>
</html>