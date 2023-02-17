<?php


require 'includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);


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



$address = mysqli_real_escape_string($con,$_POST['address']);
$state = mysqli_real_escape_string($con,$_POST['state']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$name = mysqli_real_escape_string($con,$_POST['name']);
$mname = mysqli_real_escape_string($con,$_POST['mname']);
$lname = mysqli_real_escape_string($con,$_POST['lname']);
$domain = mysqli_real_escape_string($con,$_POST['domain']);
$sdomain = mysqli_real_escape_string($con,$_POST['sdomain']);
$eyear = mysqli_real_escape_string($con,$_POST['eyear']);
$emonth = mysqli_real_escape_string($con,$_POST['emonth']); 
$lastorg = mysqli_real_escape_string($con,$_POST['lastorg']); 
$qual = mysqli_real_escape_string($con,$_POST['qual']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$cert = mysqli_real_escape_string($con,$_POST['cert']);
$heard = mysqli_real_escape_string($con,$_POST['heard']);
$location = mysqli_real_escape_string($con,$_POST['location']);
/*$recname = mysqli_real_escape_string($con,$_POST['recname']);*/
$shift = mysqli_real_escape_string($con,$_POST['shift']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[_a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_phone= "[0-9]";

$select_query = "SELECT user_id FROM users WHERE email= '$email' " ;
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$hi = mysqli_num_rows($select_query_result);

if(!preg_match($regex_email, $email)){
        header('location: signup.php?email_error=Enter a valid email');
} 





if($hi >0){  
   
   header('location: signup.php?email_error=Already registered with the email id');
}
 else {
        
        


   
    $u_mail="hui";
    $insert_query = "INSERT INTO `users`(`name`,`mname`,`lname`,`email`,`u_mail`,`phone`, `address` , `state`,`city`,`domain`,`subdomain`,`expYear`,`expMonth`,`lastorganisation`,`certification`,`heard`,`location`,`shift`, `qualification` ) VALUES ('$name','$mname','$lname','$email','$u_mail' ,'$phone', '$address' ,'$state' ,'$city','$domain', '$sdomain','$eyear','$emonth','$lastorg','$cert','$heard','$location','$shift' , '$qual' )" ;
    $insert_query_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
          $_SESSION['email'] = $email;
          //$_SESSION['user_id'] = mysqli_insert_id($con) ;
          $_SESSION['name'] = $name." ".$mname." ".$lname;
          $_SESSION['tid']=session_id();
          $_SESSION['sdomain']=$sdomain;
          $_SESSION['domain']=$domain;
          
          
          $time=1200;
		$cookie_value=getRandomString(10);
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		$timee=time();

           $insert_query = "INSERT INTO `exam_status`(`name`,`email`,`tid`,`sdomain`,`domain`,`cookie`,`start_time`,`last_time` ) VALUES ('".$_SESSION['name']."','".$_SESSION['email']."','".$_SESSION['tid']."','".$_SESSION['sdomain']."','".$_SESSION['domain']."','$cookie_value','$timee','$timee' )" ;
           $insert_query_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
          
          /*
		if(isset($_SESSION['email']))
		$eml=$_SESSION['email'];
		$uq="UPDATE `exam_status` SET `cookie`='$cookie_value' ,`start_time`='$timee',`last_time`='$timee' WHERE `email`='$eml'";
 		echo "$uq";
		//$res=mysqli_query($con,$uq) or die(mysqli_error($con));
        // echo $res;

       //echo "<script>alert('Created');</script>";
          */
        header('location: instruction.php');
        
}