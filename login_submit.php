<?php
        
        require 'includes/common.php';

        
        

        

        if (isset($_POST['email'])){

            $email = stripslashes($_REQUEST['email']);
            $username = mysqli_real_escape_string($con,$email); 
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);
            $password = md5($password);
            /*
            $query = "SELECT * FROM `users` WHERE email=? and password=?";
            $stmt = $con->prepare($query);
                    $stmt->bind_param('ss',$username,$password);
                    $stmt->execute();
            $result=$stmt->get_result();
            $rows  = $result->num_rows;
            $stmt->close();
            //$rows=0;
            if($rows>0){
                $select_query = "SELECT user_id,name FROM users WHERE email= '$email'" ;
                $select_query_result = mysqli_query($con, $select_query);
                $row = mysqli_fetch_array($select_query_result);
                $_SESSION['email'] = $username;
                $_SESSION['name']=$row['name'];                
                $_SESSION['user_id'] = $row['user_id']; 
                header('location: home.php');
                
                }else{
                    $_SESSION['error_msg'] = "<div>Username or password is incorrect</div>";
                   $previous = $_SERVER['HTTP_REFERER'];
				   header("location:index.php#login-modal");
                    }*/


            if($email=='admin@gmail.com' && $password==md5('qwerty') )
            {   
                 $_SESSION['admin']=$email;
                header('location: signup.php');
            }
            else
            {
                $_SESSION['error_msg'] = "<div>Username or password is incorrect</div>";
                header("location:index.php");

            }

        }
    ?>
