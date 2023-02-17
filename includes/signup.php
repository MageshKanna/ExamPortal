<?php 
require 'includes/common.php';
/*if (isset($_SESSION['email'])) 
{ header('location: home.php'); }    
if (!isset($_SESSION['new_email'])) 
{ header('location: index.php'); }  */


if (!isset($_SESSION['admin'])) 
{
  header('location: index.php');
}

$cookie_name='exam_handler';
if (isset($_COOKIE[$cookie_name])) 
{
  header('location: exam.php');
}


?>




<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>ExamPortal</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- //custom-theme -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- stylesheet -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />

    <!-- //font-awesome-icons -->
</head>

<body>


    <br><br>


    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="#"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                if (isset($_SESSION['email'])) { 
                    ?>
                    <li><a href="#">Hi <?php echo $_SESSION['name']; ?></a></li>
                    <?php
                } else { 
                    ?>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                    <?php } 
                ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <br>
            <div class="col-sm-offset-2 col-sm-8 columns">
                <center>
                    <h2 style="font-family: sans-serif; font-variant: small-caps; font-weight: 800">Student Registration
                    </h2>
                </center><br>

                <div style="color:#f44242; font-style: italic"><?php
                                    if (isset($_GET['email_error'])){
                                        echo $_GET['email_error'];
                                        unset($_GET['email_error']);
                                    }
                                    
                                   
                                    ?></div>
                <form id="myForm" method="post" action="signup_script.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mname" placeholder="Middle Name" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="lname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="address" placeholder="Communication Address"
                            rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <!-- <input type="text"  class="form-control" name="state" placeholder="State" required> -->
                        <select class="form-control" name="state">
                            <option selected="selected">-Select State-</option>
                            <option disabled="disabled" style="background-color: black; color: #FFF;"><i>---Union
                                    Territories---</i></option>
                            <option value="Andman Nicobar ">Andman Nicobar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Goa">Goa</option>
                            <option value="Lakshdweep">Lakshdweep</option>
                            <option value="Pondicherry">Pondicherry</option>
                            <option disabled="disabled" style="background-color: black; color: #FFF;">
                                <i>---States---</i>
                            </option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Bihar">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Orissa">Orissa</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="10 digit Mobile number">
                    </div>
                    <div class="form-group" id="dmn">
                        <!--<label>Domain</label>
                         <select class="form-control" name="domain" onchange="cascadingDropdown()" required>
                            <option>---Pick a choice!---</option>

                            <option value="softwareDevelopment" selected>Robotics</option>
                            
                      <option value="5">5</option> 
                        </select> -->
                    </div>
                    <div class="form-group" id="sdmn">
                        <label>Domain</label>
                        <select class="form-control" name="sdomain" required>
                            <option>---Pick a choice!---</option>
                            <option value="Artisan" selected>Artisan</option>
                            <option value="IRDM">IRDM</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <!--
                      <option value="5">5</option> -->
                        </select>
                    </div>


                    <button class="btn btn-primary" style="float: right;margin-left: 2%; border:none ">Register</button>
                    <button class="btn btn-primary" style="float: right; background-color: tomato; border:none"
                        onclick="myResetFunction()">Reset</button><br><br><br>
                </form>

            </div>

        </div>


    </div>
    </div>

<br/>
<br/>
<br/>
<br/>

    <div class="footer-bottom" style="position:fixed; bottom: 0 !important;">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                    <div class="copyright">

                        Copyright ©

                    </div>

                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                    <div class="design">

                        <a target="_blank" href="#">Designed By : Abhimanyuz</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--light-box-files -->
    <script src="js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
    <!--//light-box-files -->
    <script type="text/javascript">
    $(function() {
        $('.gallery a').Chocolat();
    });
    </script>
    <!-- //js -->

    <!-- testimonials -->
    <!-- required-js-files-->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <script src="js/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items: 1,
            lazyLoad: true,
            autoPlay: false,
            navigation: true,
            navigationText: true,
            pagination: true,
        });
    });
    </script>
    <!--//required-js-files-->


    <script src="js/jarallax.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
    </script>
    <!-- here starts scrolling icon -->
    <script type="text/javascript">
    $(document).ready(function() {


        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
    </script>

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>

    <!-- /ends-smoth-scrolling -->
    <!-- //here ends scrolling icon -->
    <!-- footer -->

    <!-- //footer -->


    <script>
    function myResetFunction() {
        document.getElementById("myForm").reset();
    }
    </script>

    <!-- Dropdown Cascading -->

    <script>
    function cascadingDropdown() {
        var x = document.getElementsByName("domain")[0].value;

        if (x == "softwareDevelopment")
            document.getElementById("sdmn").innerHTML =
            '<label>Sub Domain</label><select class="form-control"name="sdomain"required><option>---Pick a choice!---</option><option value="java"selected>Core JAVA</option><option value="ajava">Advance JAVA</option><option value="php">Web Development</option><option value="hadoop">Big Data-Hadoop</option><!--<option value="5">5</option>--></select>';
        else if (x == "softSkills")
            document.getElementById("sdmn").innerHTML =
            '<label>Sub Domain</label><select class="form-control"name="sdomain"required><option>---Pick a choice!---</option><option value="grammar"selected>Grammar Test</option></select>';
        else
            document.getElementById("sdmn").innerHTML =
            '<label>Sub Domain</label><select class="form-control"name="sdomain"required><option selected>---Pick a choice!---</option></select>';

        document.getElementsByName("sdomain")[0].disabled = false;
    }
    </script>

</body>

</html>