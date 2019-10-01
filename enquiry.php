<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiry</title>
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
    <h3 class="text-center">Enquiries</h3>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="enquiryHandler.php" method="post">
                <label for="">First Name</label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required>
                <br>
                <label for="">Other Name</label>
                <br>
                <input type="text" name="oName" class="form-control" placeholder="* Other Name Here" required>
                <br>
                <label for="">Telephone Number</label>
                <br>
                <input type="number" name="tPhone" class="form-control" placeholder="* Telephone Number" required>
                <br>
                <label for="">Email</label>
                <br>
                <input type="email" name="eMail" class="form-control" placeholder="* Email Here" required>
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
                <label for="">How did you know about us?</label>
                <br>
                <br>
                <select name="source" id="source">
                    <option value="">****Select Source****</option>
                    <option value="Newspaper">Newspaper</option>
                    <option value="Television">Television</option>
                    <option value="Student">Student</option>
                    <option value="Friend">Friend</option>
                    <option value="Alumni">Alumni</option>
                    <option value="Staff Member">Staff Member</option>
                    <option value="Social Media">Social Media</option>
                </select>
                <br>
                <br>
                <textarea name="comments" id="comments" cols="50" rows="10" class="form-control" placeholder="* Comments Here"></textarea>
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
