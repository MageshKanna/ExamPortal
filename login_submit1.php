<?php
        
        require 'includes/common.php';

        
        

        

        if (isset($_POST['email'])){

            $email = stripslashes($_REQUEST['email']);
            $username = mysqli_real_escape_string($con,$email); 
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);
            $password = md5($password);
            


            if($email=='admin@gmail.com' && $password==md5('qwerty1') )
            {
                $_SESSION['admin1']=$email;
                header('location: results.php');
            }
            else
            {
                $_SESSION['error_msg'] = "<div>Username or password is incorrect</div>";
                header("location:index.php");

            }

        }
    ?>
