<?php
$conn=mysqli_connect("localhost","root","","emobilis");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

$idNo = mysqli_real_escape_string($conn, $_POST['idNo']);

$sql="SELECT * FROM staf_details WHERE id_No='$idNo'";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row=$result->fetch_assoc())
    {
        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Users</title>
            <link rel="icon" href="images/emobilis.jpg">
            <link rel="stylesheet" href="css/styles.css">
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
            <h3 class="text-center">User Details/h3>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="usersHandler.php" method="post">
                        <label for=""><b>First Name</b></label>
                        <br>
                        <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required
                        value="<?php print $row ['first_name'];?>">
                        <br>
                        <label for=""><b>Middle Name</b></label>
                        <br>
                        <input type="text" name="mName" class="form-control" placeholder="* Middle Name Here" required
                        value="<?php print $row ['middle_name']?>">
                        <br>
                        <label for=""><b>Last Name</b></label>
                        <br>
                        <input type="text" name="lName" class="form-control" placeholder="* Last Name Here" required
                        value="<?php print $row ['last_name']?>">
                        <br>
                        <label for=""><b>Department</b></label>
                        <br>
                        <input type="text" name="dept" class="form-control" placeholder="* Department Here" required
                        value="<?php print $row ['department']?>">
                        <br>
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
                        <select name="uGroup" id="uGroup">
                            <option value="">****Select Group****</option>
                            <option value="System Administrator">System Administrator</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Front Office">Front Office</option>
                            <option value="Accounts">Accounts</option>
                            <option value="Management">Management</option>
                        </select>
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

        <?php
    }
}
mysqli_close($conn);
?>
