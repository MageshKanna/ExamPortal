<?php

date_default_timezone_set("Asia/Kolkata");
require 'includes/common.php';


if (!isset($_SESSION['admin'])) {
    header('location: index.php');
}

$totalQstn = 50; //Set total no. of questions here


$subject = $_SESSION['sdomain'];
if ($subject == 'Artisan') {
    $qstn_query = "SELECT * FROM abhi_question WHERE subject='Artisan' ";
} else
    $qstn_query = "SELECT * FROM abhi_question WHERE subject='" . $_SESSION['sdomain'] . "'  ";

$rs = mysqli_query($con, $qstn_query) or die(mysqli_error($con));


if (!isset($_POST['submit'])) {
    $submit = 'next';
} else {
    $submit = $_POST['submit'];
}

$r1 = rand(0, 35); // min qstn in database should be above 39
$r2 = rand(1, 2); //changed on 10th aprail


if (!isset($_SESSION['r1'])) {
    
    
    
    $_SESSION['r1'] = $r1;
    $_SESSION['r2'] = $r2;
    
    $_SESSION['trueans']   = 0;
    $_SESSION['naAnswer']  = 0;
    $_SESSION['qsnnumber'] = 1;
    
    
    $uq = "UPDATE `exam_status` SET `r1`='$r1' , `r2`='$r2'   WHERE `email`='" . $_SESSION['email'] . "'   ";
    $res = mysqli_query($con, $uq) or die(mysqli_error($con));
    
    
    
}


$r1 = $_SESSION['r1'];
for ($i = 1; $i <= $totalQstn; $i++) {
    
    $qstnArray[$i] = $r1;
    $r1            = ($r1 + $_SESSION['r2']) % 35; // min qstn in database should be above 39
    
}






echo '<!DOCTYPE html>
					<html lang="zxx">
					<head>
					<title>ITENIC</title>
					<style type="text/css">
						body{
							font-size: 18px;
						}
					</style>
					</head>
					<body>';




/*Questions HTML*/
if ($submit !== 'Get Result') {
    
    
    echo "<form name=myfm method=post action=comment.php>";
    echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
    
    if (isset($_POST['ans'])) { 

            
            $answ = $_POST['ans'];
            $i    = $_SESSION['qsnnumber'] - 1;
            
            $index1 = $qstnArray[$i]; //qstn number of database		
            
            $tid = $_SESSION['tid'];
            
            // mysqli_data_seek($rs, ($index1 - 1)); // Seek to row number 
            $row = mysqli_fetch_row($rs);
            
            $query = "insert into abhi_useranswer(stud_name,stud_email, test_number, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans ) values ( '" . $_SESSION['name'] . "','" . $_SESSION['email'] . "', '$tid','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$answ') ";
            $reslt = mysqli_query($con, $query) or die(mysqli_error($con));
            
            
            
            if ($answ == $row[6]) {
                $_SESSION['trueans'] = $_SESSION['trueans'] + 1;
            }

            if ($answ == '0') {
                $_SESSION['naAnswer'] = $_SESSION['naAnswer'] + 1;
            }

            //update table 
            $i  = $i + 1;
            $uq = "UPDATE `exam_status` SET `last_time`=" . time() . " , `qsnnumber`='$i' , `trueans`=" . $_SESSION['trueans'] . " , `naAnswer`=" . $_SESSION['naAnswer'] . "   WHERE `email`='" . $_SESSION['email'] . "'   ";
            $res = mysqli_query($con, $uq) or die(mysqli_error($con));
            
            
        }
        

        $i = $_SESSION['qsnnumber'];
        
        $_SESSION['qsnnumber'] = $_SESSION['qsnnumber'] + 1; // qstn number increment
        $index1                = $qstnArray[$i]; //qstn number of database
        
        mysqli_data_seek($rs, ($index1)); // Seek to row number 
        $row = mysqli_fetch_row($rs);
        


        echo '<script type="text/javascript">

						function enableElement(elem1,elem2) {
							elem1.disabled = false; elem2.disabled = false;
						}
					    </script>';
        
        echo '<tr><td><span class=style2><b>Que ' . ($i) . '. ' . stripslashes($row[1]) . '</b></style>';
        
        echo '<tr><td class=style8><input type=radio name=ans value=1 onclick=enableElement(this.form.elements["submit"],this.form.elements["next"]); > ' . stripslashes($row[2]);
        echo '<tr><td class=style8> <input type=radio name=ans value=2
				onclick=enableElement(this.form.elements["submit"],this.form.elements["next"]);> ' . stripslashes($row[3]);
        echo '<tr><td class=style8><input type=radio name=ans value=3
				onclick=enableElement(this.form.elements["submit"],this.form.elements["next"]);> ' . stripslashes($row[4]);
        echo '<tr><td class=style8><input type=radio name=ans value=4
				onclick=enableElement(this.form.elements["submit"],this.form.elements["next"]);> ' . stripslashes($row[5]) . '<br><br>';
    

    if ($_SESSION['qsnnumber'] == ($totalQstn + 1)) {
        echo "<tr><td><input type=submit name=submit value='Get Result' id='fmsub' disabled></form>";
        echo "<tr><td><input type=submit style='display:none' name=next value='next' disabled></form>";
    } else {
        echo "<tr><td><input type=submit name=next value='next' disabled ></form>";
        echo "<tr><td><input type=submit style='display:none'  name=submit value='Get Result' id='fmsub' disabled ></form>"; // hidden btn click may nt wrk
        
    }
    echo "</table></table>";
    
    
    
}



if ($submit == 'Get Result') {
    
    
    echo '<script type="text/javascript">
                                var x = window.parent.document.getElementById("timer"); 
                                	x.style.display="none";</script>'; //hide timer after exam
    
   
    $tid = $_SESSION['tid'];    
    $answ = $_POST['ans'];
    $i    = $_SESSION['qsnnumber'] - 1;
    
    $index1 = $qstnArray[$i]; //qstn number of database		
    
    
    
    mysqli_data_seek($rs, ($index1 - 1)); // Seek to row number 
    $row = mysqli_fetch_row($rs);
    
    $query = "insert into abhi_useranswer(stud_name,stud_email, test_number, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans ) values ( '" . $_SESSION['name'] . "','" . $_SESSION['email'] . "', '$tid','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$answ') ";
    $reslt = mysqli_query($con, $query) or die(mysqli_error($con));
    
    
    
    if ($answ == $row[6]) {
        $_SESSION['trueans'] = $_SESSION['trueans'] + 1;
    }
    if ($answ == '0') {
        $_SESSION['naAnswer'] = $_SESSION['naAnswer'] + 1;
    }
    
    
    $uq = "DELETE FROM `exam_status` WHERE email='" . $_SESSION['email'] . "' ";
    $res = mysqli_query($con, $uq) or die(mysqli_error($con));
    
    
    // echo "<br><br><fieldset><center><h1 class=head1> Result</h1><center><br>";
    // echo "<Table align=center><tr class=tot><td>Total Question<td> &nbsp;&nbsp;" . $totalQstn;
    // echo "<tr class=tans><td>True Answer&nbsp;&nbsp;&nbsp;<td>" . $_SESSION['trueans'];
    
    // $w = $totalQstn - $_SESSION['trueans'] - $_SESSION['naAnswer'];
    // echo "<tr class=fans><td>Wrong Answer&nbsp;&nbsp;&nbsp;<td> " . $w;
    // $rrr = $_SESSION['trueans'];
    // echo "<tr class=fans><td><b> Total score &nbsp;&nbsp;&nbsp;</b><td> " . $rrr;
    // echo "</table><fieldset>";
    // echo "<br><br><center><a href='#'><button class='btn btn-success'>Get Certificate</button></a></center>";
    // $date  = date("Y:m:d H:i:s");
    // $query = "insert into abhi_result(test_number,test_date,score,stud_name,stud_email,test_subject,domain) values ( '$tid','$date','$rrr','" . $_SESSION['name'] . "','" . $_SESSION['email'] . "', '" . $_SESSION['sdomain'] . "','" . $_SESSION['domain'] . "' )";
    // $reslt = mysqli_query($con, $query) or die(mysqli_error($con));
    // if (!$reslt) {
        // die("error");
    // }
    
    echo "<br><br><h2 align=center>Well done! Exam is over now.<br><br><br> Please submit the feedback form below:</h2>";
    unset($_SESSION['tid']);
    unset($_SESSION['trueans']);
    unset($_SESSION['naAnswer']);
    unset($_SESSION['r1']);
    unset($_SESSION['r2']);
    
    unset($_SESSION['qsnnumber']);
    
    unset($_SESSION['email']);
    unset($_SESSION['name']);
    
    if (isset($_COOKIE['exam_handler'])) {
        
        setcookie('exam_handler', null, -1, '/');
        
        
    }
    
    session_destroy();
    
    
    
    
    echo '<div class="col-xs-offset-2 col-xs-8">
                                <h2 style="color:tomato"><b>Feedback:</b></h2><br>
											<form action="feedback.php" method="post">
											 	<div class="form-group">
                  									<input type="text"  class="form-control" name="fstname"  placeholder="Name" required> 
                  								</div>
                  								<div class="form-group">
                  									<input type="text"  class="form-control" name="mail"  placeholder="Email" required> 
                  								</div>
                  								<div class="form-group">
                  									<textarea class="form-control" rows="5" name="message" placeholder="Your Message"  required=""></textarea>
                  								</div>
												<button class="btn btn-primary" style="float: right;">Submit</button>

											</form>
											<br><br><br>
										</div>';
    
    echo '<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
										<script type="text/javascript" src="js/bootstrap.js"></script>

										<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />';
    
    
    
    
}




echo '</body></html>';


?>