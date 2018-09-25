<?php


require 'includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);



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

           $insert_query = "INSERT INTO `exam_status`(`name`,`email`,`tid`,`sdomain`,`domain` ) VALUES ('".$_SESSION['name']."','".$_SESSION['email']."','".$_SESSION['tid']."','".$_SESSION['sdomain']."','".$_SESSION['domain']."' )" ;
           $insert_query_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
          
        header('location: instruction.php');
        
}