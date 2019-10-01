
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>iDealTEK Ltd</title>
    <link rel="icon" href="images/coolcomp.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="css/custom.css">

    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <!--    the above bootstrap javascripts must be in the order as shown above-->

</head>
<body>
<div class="logo">
    <img src="images/keyboardhd.jpg" alt="Computer" width="500" height="200">

</div>
<hr>
<!--<div class="heading">-->
<!--    <h3 class="text-center"> NavBar and Carousel</h3>-->
<!--</div>-->
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">
        <img src="images/coolcomp.jpg" alt="Logo" width="50" height="50">
    </a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Products and Services
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="computerhardware.html">Computer Hardware</a>

                    <a class="dropdown-item" href="cctv.html">CCTV Installation</a>
                    <a class="dropdown-item" href="itsecurity.html">IT Security</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq.html">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus.html">Contact Us</a>
            </li>
        </ul>
    </div>

</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
        <li data-target="#demo" data-slide-to="5"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/itsecurity.jpg" width="100%" height="500" alt="Linux">
            <div class="carousel-caption">
                <h3>IT Security</h3>
                <p>We will ensure that your network and systems are properly secure from outsider attacks</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/keyboardhd.jpg" width="100%" height="500" alt="Keyboard">
            <div class="carousel-caption">
                <h3>Computer Hardware and Software</h3>
                <p>We provide high quality and genuine computer hardware and software.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/rj45.jpg" width="100%" height="500" alt="Network Cables">
            <div class="carousel-caption">
                <h3>CCTV Installation</h3>
                <p>Expert CCTV Installers</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="images/tech-wallpaper-2.jpg" width="100%" height="500" alt="Tech HD">
            <div class="carousel-caption">
                <h3>Graphic Design</h3>
                <p>Awesome we are at graphic designs. Give us the chance and we will gladly show you!</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="images/computernetwork.jpg" width="100%" height="500" alt="Computer Network">
            <div class="carousel-caption">
                <h3>Computer Network</h3>
                <p>We are capable of setting up efficient and working computer networks within your work area.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="images/androidhdmusic.jpg" width="100%" height="500" alt="Windows 10">
            <div class="carousel-caption">
                <h3>Software and App Development</h3>
                <p>We have a world class development team ready to come up with awesome applications that perform in the required manner.</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <h4 class="text-center">About Us</h4>
            <p class="text-center">iDealTEK Ltd was incorporated in January 2012 and started trading in April 2012. Our focus is on the provision of world class ICT business solutions to our clients. This includes genuine and quality software, hardware, accessories, IT solutions and IT security to fit every need and budget. We have in place a team of highly
                qualified dedicated personnel who are backed by leading associates.</p>
            <br>

            <div class="buttons">
                <a href="about.html" class="btn btn-success">Read More</a>
            </div>
        </div>
        <div class="col-sm-3">
            <h4 class="text-center">Our Products</h4>
            <p class="text-center">We offer various world class products and services. As shown below:</p>
            <ul>
                <li>Computer Hardware</li>
                <li>Computer Software</li>
                <li>Software and App Development</li>
                <li>CCTV Installation</li>
                <li>Graphic Design</li>
                <li>IT Security</li>
            </ul>
            <p class="text-center">Click on below link to see more details on the products and services we offer</p>

            <div class="buttons">
                <a href="#" class="btn btn-info">Read More</a>
            </div>
        </div>
        <div class="col-sm-3">
            <h4 class="text-center">FAQ</h4>
            <p class="text-center"> Being in IT support we are often asked similar questions a lot of the time. We have therefore compiled a list of common questions and possible solutions to help aid you in solving your own computer issues.
                Please click on the link below to find faq's about certain areas of IT</p>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="buttons">
                <a href="faq.html" class="btn btn-danger">Read More</a>
            </div>
        </div>
        <div class="col-sm-3">
            <h4 class="text-center">Contact Us</h4>
            <p class="text-center">Please click on the below button to get all our contact detail. Feel free to contact us any time of day
                as we have our customer service team available 24 hrs</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="buttons">
                <a href="contactus.html" class="btn btn-warning">Read More</a>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="footer">
    <h4 class="text-center">
        Copyright &copy; 2019. iDealTEK Ltd.
    </h4>
</div>
</body>
</html>

