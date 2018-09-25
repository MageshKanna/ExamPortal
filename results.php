<?php 
date_default_timezone_set("Asia/Kolkata");
require 'includes/common.php';
if (!isset($_SESSION['admin1'])) 
{
  header('location: index.php');
}


$q="SELECT * from abhi_result";
$result=mysqli_query($con,$q) or die(mysqli_error($con));

if(mysqli_num_rows($result)==0) 
    die("No results in database");

?>



<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style_admin.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<script src="js/skycons.js"></script>
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.jqueryui.min.js"></script>
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" media="all" />

<!--skycons-icons-->

<!--//skycons-icons-->
</head>
<body>	
<center>

<div class="page-container">	
   <div class="">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							
							
							<div class="clearfix"> </div>
					</div>
						<div style="float: right;">
								<a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
								<div class="clearfix"> </div>
						</div>
						
				     <div class="clearfix"> </div>	
				</div>

		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
	


<div class="inner-block">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3><?php  
							$q1="SELECT * from users";
							$result1=mysqli_query($con,$q1) or die(mysqli_error($con)); 
							echo mysqli_num_rows($result1);	
							?>

						</h3>
						<h4>Total</h4>
						<p>Students Registered </p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					<h3><?php 
						$q2="SELECT * FROM abhi_result WHERE WEEKOFYEAR(test_date)=WEEKOFYEAR(NOW()) ORDER BY `abhi_result`.`test_date` DESC";
						$result2=mysqli_query($con,$q2) or die(mysqli_error($con)); 
						echo mysqli_num_rows($result2);
						$row1=mysqli_fetch_array($result2);
						$last_exam=strtoupper($row1['test_subject']);
						$last_date=($row1['test_date']);
					 ?></h3>
					<h4>This week</h4>
					<p>Students Take Exam</p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						<h3>Last Test</h3>
						<h4>:<?php echo $last_exam; ?></h4>
						<p>Date:&nbsp<?php echo $last_date; ?></p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
	</div>

		


	<div class="col-xs-12" style="margin-top: 2%; margin-bottom: 4%;">
		<h2>Results</h2>
		<table id="example" class="display" style="width:100%;">
	        <thead>
	            <tr>
	            	<th>#</th>
	                <th>Name</th>
	                <th>Email</th>
	                <th>Domain</th>
	                <th>Sub-Domain</th>
	                <th>Score<br>(out of 30)</th>
	                <th>Time</th>
	                <th>Status</th>
	            </tr>
	        </thead>
	        <tbody>
	            <?php $i=1; while($row=mysqli_fetch_array($result)) { ?>
	            <tr>
	            	<td><?php echo $i; $i++; ?></td>
	                <td><?php echo $row['stud_name']; ?></td>
	                <td><?php echo $row['stud_email']; ?></td>
	                <td><?php echo $row['domain']; ?></td>
	                <td><?php echo $row['test_subject']; ?></td>
	                <td><?php echo $row['score']; ?></td>
	                <td><?php echo $row['test_date']; ?></td>
	                <td>Complete</td>
	                
	            </tr>
	            <?php } ?>
	            
	            
	            
	            
	        </tbody>
	        <tfoot>
	            <tr>
	            	<th>#</th>
	                <th>Name</th>
	                <th>Email</th>
	                <th>Domain</th>
	                <th>Sub-Domain</th>
	                <th>Score(out of 30)</th>
	                <th>Time</th>
	                <th>Status</th>
	            </tr>
	        </tfoot>
	    </table>
	</div>



</div>



</div>
</div>
</div>



<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->



<!-- table js-->
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>


</center>
</body>
</html>                     