<?php
				
				 require "includes/common.php";
				 
				if(isset($_POST['message']))
					{
						
						
						$lstname = '';
						$fstname = mysqli_real_escape_string($con,$_POST['fstname']);
						$mail = mysqli_real_escape_string($con,$_POST['mail']);
						$message = mysqli_real_escape_string($con,$_POST['message']);
						$q="INSERT INTO `feedback` (`fname`, `mail`, `message`) VALUES ('$fstname', '$mail', '$message')";
						$reslt=mysqli_query($con,$q) or die(mysqli_error($con));
					
						
					}
				
				echo '<center><h2><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Thanks for your valuable feedback</h2>
				<h4>Back to <button id="myButton" style="background-color:tomato; cursor: pointer;" >Home</button> </h4>
				</center>



			
			<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        parent.location.href = "index.php";
    };


</script>';

/*echo "<script>$(document).ready(function () {
    // Handler for .ready() called.
    $('html, parent.body').animate({
        scrollTop: $('#what').offset().top
    }, 'slow');
}); </script> ";*/


				?>

