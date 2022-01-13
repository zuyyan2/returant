

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Contact Us</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Medizin Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/slider.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <!-- //Fonts -->
    <style>
        body{
            background-image:URL(images/aboutground.jpg)    
            }
        </style>
</head>

<body>
<!--try header-->

<header>
<div class="container">
<div class="header-section">
                        <h1>
                            <a class="navbar-brand logo editContent" href="homepage.php">
                                <span class="fa fa-angellist"></span><i><u><b> Job Finder</b></u></i>
                            </a>
                        </h1>
                    </div>
                    <div class="nav_section">
                    <nav>

                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                    <li><a href="homepage.php">HOME</a></li>
                                

                                <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                    <a href="#">JOBS <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="inner-dropdown">
                                    <li><a href="Teacher.php">Teacher</a></li>
                                        <li><a href="doctor.php">Doctor</a></li>
                                        <li><a href="lawyer.php">Lawyer</a></li>
                                        <li><a href="engineer.php">Engineer</a></li>
                                        <li><a href="accountant.php">Accountant</a></li>
                                        <li><a href="web developer.php">Web developer</a></li>
                                        <li><a href="android developer.php">Android developer  </a></li>
                                        <li><a href="sales man.php">Sales man</a></li>
                                    </ul>
                                </li>
                                <li><a href="Package.php">PACKAGES</a></li>
                                <li><a href="About Us.php">ABOUT US</a></li>
                                <li><a href="contact.php">CONTACT US</a></li>
                                <li><a href="login.php">LOGOUT</a></li>

                            </ul>
                        </nav>
                
    </nav>
    </div>
    </div>
    </header>
<!-- mian-content -->
    

    <!-- //banner -->
    <!-- //banner-botttom -->

    <br>
    <br>
    <br>
    <section class="content-info py-5">
        <div class="container py-md-5">
            <div class="text-center px-lg-5">
                <h3 class="title-w3pvt mb-5"><i><u><b>Contact Us</u></b></i></h3>
                <div class="title-desc text-center px-lg-5">
                    <p class="px-lg-5 sub-wthree" style="color:white;"><i>Now that you have a list of 
                        companies that you are interested in, the next step is to contact them 
                        directly. You will be applying to specific positions that are posted or
                         informing the company of your interest to work there and inquiring about
                          any opportunities available.</i></p>
                </div>
            </div>
            <div class="contact-w3pvt-form mt-5">
                <form action="dataccess.php" class="w3layouts-contact-fm" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label style="color:white;">First Name</label>
                                <input class="form-control" type="text" name="firstName" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label style="color:white;">Last Name</label>
                                <input class="form-control" type="text" name="lastName" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label style="color:white;">Email</label>
                                <input class="form-control" type="email" name="Email" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label style="color:white;">Write Message</label>
                                <textarea class="form-control" name="Message" placeholder="" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group mx-auto mt-3">
                            <button type="submit"  name="submit" class="btn submit"><a href="feedthanks.php">Submit</a></button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- //banner-botttom -->

   

    <?php
include("footer.php")
?>
</body>

</html>
