<?php

	require 'includes/common.php';
	if (!isset($_SESSION['admin'])) 
	{
	  header('location: index.php');
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Instructions</title>

    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- stylesheet -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />

    <style type="text/css">
    li {}
    </style>
</head>

<body>



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

            </div>
        </div>
    </div>

    <br><br><br><br>
    <center>
        <h2>Instruction are as follows:</h2><br>
    </center>
    <div style="margin:auto; max-width: 400px">
        <p>1.Exam will be of 20 minutes.<br>2.You can not go back at any level<br>3.You can not skip any
            question<br>4.Results will be displayed at the end of exam</p>

        <p><b>click here to start the exam</b></p>

        <form action="exam.php">
            <input type="submit" value="Start Exam" class="btn btn-primary">
        </form>
    </div>



    <br>








    <div class="footer-bottom" style="margin-top: 67vh">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                    <div class="copyright">

                        Copyright ©

                    </div>

                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                    <div class="design">

                        <a target="_blank" href="#">Designed By : MageshKanna.</a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</body>

</html>