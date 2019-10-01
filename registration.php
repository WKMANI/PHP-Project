<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
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
    <h3 class="text-center">Registration Form</h3>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="regHandler.php" method="post">
                <label for="">Student ID</label>
                <br>
                <input type="text" name="student_ID" class="form-control" placeholder="* Student ID Here">
                <br>
                <label for="">First Name</label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required>
                <br>
                <label for="">Other Name</label>
                <br>
                <input type="text" name="oName" class="form-control" placeholder="* Other Name Here" required>
                <br>
                <label for="">Gender</label>
                <br>
                <select name="gender" id="gender">
                    <option value="">****Select Gender****</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <br>
                <br>
                <label for="">Date of Birth</label>
                <br>
                <input type="date" name="dob" class="form-control" required>
                <br>
                <label for="">Postal Address</label>
                <br>
                <input type="text" name="pAddress" class="form-control" placeholder="* Postal Address Here" required>
                <br>
                <label for="">Telephone Number</label>
                <br>
                <input type="number" name="tPhone" class="form-control" placeholder="* Telephone Number Here" required>
                <br>
                <label for="">Email</label>
                <br>
                <input type="email" name="eMail" class="form-control" placeholder="* Email Here" required>
                <br>
                <label for="">Next of Kin</label>
                <br>
                <input type="text" name="kinName" class="form-control" placeholder="* Next of Kin Names Here">
                <br>
                <label for="">Next of Kin Number</label>
                <br>
                <input type="number" name="kinNumber" class="form-control" placeholder="* Next of Kin Number Here">
                <br>
                <label for="">Course Enrolling For</label>
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
                <label for="">High School Attended</label>
                <br>
                <input type="text" name="highSchl" class="form-control" placeholder="* High School attended" required>
                <br>
                <label for="">Year from</label>
                <br>
                <input type="date" name="highSchYearFrm" class="form-control" required>
                <br>
                <label for="">Year To</label>
                <br>
                <input type="date" name="highSchYearTo" class="form-control" required>
                <br>

                <label for="">KCSE Mean Grade</label>
                <br>

                <select name="grade" id="grade">
                    <option value="">****Select Grade****</option>
                    <option value="A">A</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B">B</option>
                    <option value="B-">B-</option>
                    <option value="C+">C+</option>
                    <option value="C">C</option>
                    <option value="C-">C-</option>
                    <option value="D+">D+</option>
                    <option value="D">D</option>
                    <option value="D-">D-</option>
                </select>
                <br>
                <br>
                <label for="">Education Level</label>
                <br>

                <select name="edLevel" id="edLevel">
                    <option value="">****Select Level****</option>
                    <option value="High School">High School</option>
                    <option value="College">College</option>
                    <option value="University">University</option>
                </select>
                <br>
                <br>
                <label for="">College/University Attended</label>
                <br>
                <input type="text" name="uniColl" class="form-control" placeholder="* College/University Name">
                <br>
                <label for="">Year From</label>
                <br>
                <input type="date" name="uniYearFrom" class="form-control">
                <br>
                <label for="">Year To</label>
                <br>
                <input type="date" name="uniYearTo" class="form-control">
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
