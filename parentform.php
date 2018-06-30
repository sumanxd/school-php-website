<?php
require('dbparent.php');
include("auth.php");
include_once 'dbconfig.php';
?>
<html>

	<head>
		
		<title>Parent Form</title> 
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="student.css">
		
		
		<style>
			table {
			border-collapse: collapse;
				  }

			table, td, tr {
				border: 1px solid black;
						  }
		</style>
		
	</head>
	
<body>
	
	
<div class="container-fluid">
		<div class="icons">
			<p style="background-color:#2196f3;color:white;padding:10px">
			<i class="fa fa-envelope"></i> abc.school@gmail.com <i class="fa fa-phone"></i>091-40-23530453		
			<a href="#"><i class="fa fa-google-plus-square" aria-hidden="true" style=" float:right;"></i>
			<i class="fa fa-facebook-square" aria-hidden="true" style=" float:right;"></i>
			<i class="fa fa-twitter-square" aria-hidden="true" style=" float:right;"></i>
			<i class="fa fa-pinterest-square" aria-hidden="true" style=" float:right;"></i>
			</a></p>
		</div>
<div class="row">					
	<section>


		<div class="col-md-2 text-center">
			<img src="images/azra2.jpg" style="height:40px;width:211px;margin-top:40px">
		</div>
		
		<div class="col-md-10 text-right" style="padding-top:2%">
		<div class="dropdown">
			<a href=""><button class="dropbtn">HOME</button></a>
		</div>

		<div class="dropdown">
				<button class="dropbtn">ABOUT US <i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content" style="text-align:left">
				<a href="#">Our Vision And Mission</a>
				<a href="#">THe Visionaries</a>
				<a href="#">Learning At Abc</a>
				<a href="#">Our Team</a>
				<a href="#">Branches</a>
			</div>
		</div>
  
		<div class="dropdown">
				<button class="dropbtn">FEATURES <i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content" style="text-align:left">
				<a href="#">Campus-Tour</a>
				<a href="#">Campus-View</a>
				<a href="#">Digital-Library</a>
				<a href="#">Sports</a>
				<a href="#">Campus-Eminities</a>
			</div>
		</div>
  
		<div class="dropdown">
				<button class="dropbtn">Events <i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content" style="text-align:left">
				<a href="#">Harita Haaram</a>
				<a href="#">Teachers Day</a>
				<a href="#">Parent's Corner</a>
			</div>
		</div>
  
		<div class="dropdown">
				<button class="dropbtn">ADMISSIONS<i class="fa fa-caret-down"></i></button>
   
			<div class="dropdown-content" style="text-align:left">
				<a href="#">Admission Policy</a>
				<a href="#">Admission Procedure</a>
				<a href="#">Admission Brochure</a>
				<a href="#">FAQ</a>
				<a href="#">FEE Structure</a>
			</div>
		</div>

		<div class="dropdown">
				<button class="dropbtn">CAREERS</button>
		</div>

		<div class="dropdown">
				<button class="dropbtn">CONTACT US</button>
		</div>
		<div class="dropdown">
				<button class="dropbtn"><a href="logout.php">Log Out</a></button>
		</div>

	</section>
	
	<section>
		<img src="images/g.jpg" style="width:100%">
	</section>
	
	<section>

	<div class="container-fluid"  >
				<h1 style="text-align:center;">Parent Page</h1>
	 
		<div class="row" style="margin-top:40px;overflow:hidden;">
							
					<ul class="nav nav-pills" style="overflow:hidden;border:2px solid blue;font-size:21px;text-transform:uppercase;font-family:roboto;background-color:lightgreen;border-top-left-radius:25px;border-top-right-radius:25px;overflow:hidden;">
							
							
					<li ><a href="#clients" data-toggle="tab" style="color:white;     margin-left: 391px;"><strong style="margin-left: 163px;">View Assignments</strong></a></li>
							
					</ul>					
			<div class="tab-content" style="border:1px solid blue;">
				<div id="clients" class="tab-pane fade in active">
								
								
					<div class="row col-md-12 custyle">
				
						<div  class="table-responsive">
							<table class="table table-bordered">
						
									<tr style="font-weight:bold;">
									<td>S.No</td>
									<td>Class Name</td>
									<td>Subject Name</td>
									<td>Date of submission</td>
									<td>Total marks</td>
									<td>File Name</td>
									<td>File Type</td>
									<td>File Size(KB)</td>
									<td>View</td>
									</tr>
									<?php
									$count=1;
									$sql="SELECT * FROM tbl_uploads ORDER BY id desc";
									$result_set=mysqli_query($con,$sql);
									while($row=mysqli_fetch_array($result_set))
									{
										?>
										<tr>
										<td align="center"><?php echo $count; ?></td>
										<td><?php echo $row['class'] ?></td>
										<td><?php echo $row['subject'] ?></td>
										<td><?php echo $row['date'] ?></td>
										<td><?php echo $row['marks'] ?></td>
										<td><?php echo $row['file'] ?></td>
										<td><?php echo $row['type'] ?></td>
										<td><?php echo $row['size'] ?></td>
										<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
										</tr>
										<?php
										$count++;
									}
									?>
							</table>
					
						</div>
			  
					</div>
				</div>
			</div>
		</div>
    </div>

    <script>
	    $(document).ready(function(){
		 
			$("#radio1").click(function(){
			
				 $("#tb1").css("display", "block");
				$("#tb5").css("display", "none");
				$("#tb2").css("display", "none");
				$("#tb3").css("display", "none");
				$("#tb4").css("display", "none");
				$("#tb6").css("display", "none");
				$("#tb7").css("display", "none");
				  
			});
			$("#radio2").click(function(){
	
	
				$("#tb2").css("display", "block");
				$("#tb1").css("display", "none");
				$("#tb5").css("display", "none");
				$("#tb3").css("display", "none");
				$("#tb4").css("display", "none");
				$("#tb6").css("display", "none");
				$("#tb7").css("display", "none");

			});
			$("#radio3").click(function(){
	
	
				$("#tb3").css("display", "block");
				$("#tb1").css("display", "none");
				$("#tb2").css("display", "none");
				$("#tb5").css("display", "none");
				$("#tb4").css("display", "none");
				$("#tb6").css("display", "none");
				$("#tb7").css("display", "none");				  
			
			});
			$("#radio4").click(function(){
	
	
				$("#tb4").css("display", "block");
				$("#tb1").css("display", "none");
				$("#tb2").css("display", "none");
				$("#tb3").css("display", "none");
				$("#tb5").css("display", "none");
				$("#tb6").css("display", "none");
				$("#tb7").css("display", "none");
				  			
			});
			$("#radio5").click(function(){
	
	
				$("#tb5").css("display", "block");
				$("#tb1").css("display", "none");
				$("#tb2").css("display", "none");
				$("#tb3").css("display", "none");
				$("#tb4").css("display", "none");
				$("#tb6").css("display", "none");
				$("#tb7").css("display", "none");

			});
			$("#radio6").click(function(){
	
	
				$("#tb6").css("display", "block");
				$("#tb1").css("display", "none");
				$("#tb2").css("display", "none");
				$("#tb3").css("display", "none");
				$("#tb4").css("display", "none");
				$("#tb5").css("display", "none");
				$("#tb7").css("display", "none");
				  
			
			});
			$("#radio7").click(function(){
	
	
				$("#tb7").css("display", "block");
				$("#tb1").css("display", "none");
				$("#tb2").css("display", "none");
				$("#tb3").css("display", "none");
				$("#tb4").css("display", "none");
				$("#tb6").css("display", "none");
				$("#tb5").css("display", "none");
				  
			
			});
		});  
	  
	</script>
	</section>
	
	<br><br><br><br>
	<section>
			<div class="col-md-2">
				<center><img src="images/campus.png"></center>
			</div>

			<div class="col-md-3">
				<center><img src="images/media.png"></center>
			</div>

			<div class="col-md-2">
				<center><img src="images/adm.png"></center>
			</div>

			<div class="col-md-3">
				<center><img src="images/blog.png"></center>
			</div>

			<div class="col-md-2">
				<center><img src="images/conact.png"></center>
			</div>
	</section>
	<br><br><br>

	<section>
			<img src="images/azra4.png" class="img-responsive"> 
				<div style="background-color:#252525;height:220px;width:100%">
					<p style="font-size:20px;color:white;margin-left:400px">Subscribe for Updates</p>
					<p style="font-size:15px;color:grey;margin-left:400px;line-height:2 ">Abc Public School’s only aim is to bring out the best in a child in various aspects.<br/>
					Dedicated to excellence for children attending nursery to class 10th.</p>
					<form>
					<input type="text" name="Email" placeholder="Email" style="width:300px;background-color:#222;height:30px;padding:0px;margin-left:400px"  required>
					<input type="image" src="images/sub.png" alt="submit">
					</form>
				</div>
	</section>
			
	<section style="background-color:#222;height:100px">
			<div style="margin-left:180px;font-size:15;color:grey">
				<br><br>
			<img src="images/azra2.jpg" style="height:40px;width:211px">
					&copy;Copyright2010.All Rights Reserved.| By <a href="#">Abc Public School</a> 
			</div>
	</section>
</div>
</div>
</body>
</html>