<?php

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Login | Exam Portal</title>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
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
            
            <a href="#" ></a>
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
                                         
                <?php } 
                ?>
            </ul> 
        </div> 
    </div> 
</div>

<br><br><br><br>

<div style="color:#f44242; font-style: italic"><?php
                                    if (isset($_SESSION['error_msg'])){
                                        echo $_SESSION['error_msg'];
                                        unset($_SESSION['error_msg']);
                                    }
                                    
                                   
                                    ?></div>

	<div id="container">
		<div id=demo1 class="login-Field col-xs-5">
            <center>
            <h2 style="font-weight: 900; font-family: sans-serif; font-variant: small-caps; text-align: center;"> Welcome to Exam Portal </h2>
            </center>
        	<form action="login_submit.php" method="post">
  				<fieldset style="box-shadow:none">

  					
                    <legend><h2>Login For Exam:</h2></legend>
                    Email:<br>
                    <input type="email" name="email" required>
                    <br>
                    password:<br>
                    <input type="password" name="password" required>
                    <br><br>
                    <input type="submit" value="Login" class="btn btn-primary" style="margin-bottom: 10px;">
                </fieldset>
			</form>


        </div>
        
        <div class="content col-xs-5" >
        
            
        </div>

	</div>
    <div class="row col-xs-12 col-xs-offset-1"><button class="btn btn-primary" onclick="exam()">Exam</button>
        <button class="btn btn-primary" onclick="checkResult()">Result</button></div>



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


    <script type="text/javascript">
        function exam() {
            document.getElementById('demo1').innerHTML = '<form action="login_submit.php"method="post"><fieldset style="box-shadow:none"><legend><h2>Login For Exam:</h2></legend>Email:<br><input type="email"name="email"required><br>password:<br><input type="password"name="password"required><br><br><input type="submit"class="btn btn-primary"value="Login"style="margin-bottom: 10px;"></fieldset></form>';
        }
        function checkResult() {
            document.getElementById('demo1').innerHTML = '<form action="login_submit1.php"method="post"style=" background-image: linear-gradient(to right top, #18c4eb, #00d5ed, #00e5e4, #00f3d1, #00ffb4);padding-left:1%"><fieldset style="box-shadow:none"><legend><h2>Login For Results:</h2></legend>Email:<br><input type="email"name="email"required><br>password:<br><input type="password"name="password"required><br><br><input type="submit"class="btn btn-primary"value="Login"style="margin-bottom: 10px;"></fieldset></form>';
        }
        
    </script>

</body>
</html>