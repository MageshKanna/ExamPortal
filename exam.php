
<?php 
date_default_timezone_set("Asia/Kolkata");




require 'includes/common.php';


if (!isset($_SESSION['admin'])) 
{
  header('location: index.php');
}



$submit='null'; 
extract($_POST);
extract($_GET);
extract($_SESSION);




$cookie_name='exam_handler';
function getRandomString($length) 
	{
	    $validCharacters = "ABCDEFGHIJKLMNPQRSTUXYVWZ123456789";
	    $validCharNumber = strlen($validCharacters);
	    $result = "";
	 
	    for ($i = 0; $i < $length; $i++) {
	        $index = mt_rand(0, $validCharNumber - 1);
	        $result .= $validCharacters[$index];
	    }
		return $result;
	}



if (isset($_COOKIE[$cookie_name])) {
	
	$q="SELECT * from exam_status WHERE cookie='".$_COOKIE[$cookie_name]."' ";
	$result=mysqli_query($con,$q) or die(mysqli_error($con));

	if (mysqli_num_rows($result)==0) {
		echo '<br><br>cookies were not enabled on your web browser or it expired! <br>SIGN UP AGAIN<br><br>';
		echo "<script>setTimeout(function () {
			   window.location.href= 'signup.php';

			},2000);</script>";
	}



		$row = mysqli_fetch_array($result);
		$_SESSION['tid']=$row['tid'];
		$_SESSION['trueans']=$row['trueans'];
		$_SESSION['naAnswer']=$row['naAnswer'];
		$_SESSION['r1']=$row['r1'];
		$_SESSION['r2']=$row['r2'];
		//$_SESSION['stud_id'];
		$_SESSION['qsnnumber']=$row['qsnnumber'];
		//$_SESSION['answer'];
		$_SESSION['email']=$row['email'];
		$_SESSION['name']=$row['name'];	
		$_SESSION['sdomain']=$row['sdomain'];					
		$_SESSION['domain']=$row['domain'];	
		$time=1200-($row['last_time']-$row['start_time']);


	}
	else
	{
		$time=1200;
		$cookie_value=getRandomString(10);
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		$timee=time();
		if(isset($_SESSION['email']))
		$eml=$_SESSION['email'];
		$uq="UPDATE `exam_status` SET `cookie`='$cookie_value' ,`start_time`='$timee',`last_time`='$timee' WHERE `email`='$eml'   ";
		$res=mysqli_query($con,$uq ) or die(mysqli_error($con));
	}


if (!isset($_SESSION['email'])) 
{die('Plese <a href="logout.php">login here</a> to access exam portal');}  


?>



<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Exam Portal</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

<
<script>
  function resizeIframe(obj) {
    obj.style.height = 180+ obj.contentWindow.document.body.scrollHeight +'px';
  }
</script>



<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />

 
<!-- //font-awesome-icons -->
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
            
            <a href="#" > </a>
        </div> 
        <div class="collapse navbar-collapse" id="myNavbar"> 
            <ul class="nav navbar-nav navbar-right"> 
                <?php
                if (isset($_SESSION['email'])) { 
                    ?>
                <li><a href="#">Hi <?php echo $_SESSION['name']; ?></a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                <?php
                } else { 
                    ?> 
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Register</a></li>                     
                <?php } 
                ?>
            </ul> 
        </div> 
    </div> 
</div>



	<br><br><br><br>
	<center><h1 id="what" style="font-family: sans-serif; font-variant: small-caps; font-weight: 800">Online Exam Portal</h1></center>

<center><h2 id="timer" style="width:6%; border-radius: 10px; background-color: red; font-weight: 900; color: white"></h2></center>

<iframe id="myframe" src="testlink.html" width="100%"  frameborder="0"  scrolling="yes" onload="resizeIframe(this)" ></iframe>



<div class="footer-bottom" style="position:fixed; bottom: 0 !important;">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <div class="copyright">

         Copyright 

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



<script>

	setTimeout("function1()", 3000);
function function1(){
    var x = document.getElementById("myframe");
    var y = (x.contentWindow || x.contentDocument);
    if (y.document)
    	y = y.document;
    y=y.getElementById('fmsub');
    


var time = <?php $timer=1200; echo $time; ?>;   //echo $timer; 
			   //$_SESSION['exam_duration'] is omitted by exam time=1200 seconds
		time = (time+1);
		time  = time*1000;
		function displayTimer()
		{
			var hours = Math.floor(time/36e5);
			var mins = Math.floor((time%36e5)/6e4);
			var secs = Math.floor((time%6e4)/1000);
			$('#timer').html(hours+':'+mins+':'+secs);
			if(time<=0)
			{
				y.click();		
			}
		}
		setInterval(function()
		{
			time-=1000;
			displayTimer();
		},1000);

}
</script>

<script>
 


</script>





</body>
	
	


</html>