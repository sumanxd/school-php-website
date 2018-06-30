<html>

	<head>
		<title>sign in form</title> 
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta charset="utf-8">
         
		<link rel="stylesheet" type="text/css" href="sign in.css">
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
		</a>
	</div>
		</p>
		<section>

						<div class="row">
						<div class="col-md-2 text-center">
							<img src="images/azra2.jpg" style="height:40px;width:211px;margin-top:20px">
						</div>
					
<div class="col-md-10 text-right" style="padding-top:2%">
							<div class="dropdown">
								<a href="index.html"><button class="dropbtn">HOME</button></a>								
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
						<button class="dropbtn">COLLABORATION <i class="fa fa-caret-down"></i></button>
						<div class="dropdown-content" style="text-align:left">
							<a href="teacherregistration.php">Teacher's Corner</a>
							<a href="studentregistration.php">Student's Corner</a>
							<a href="parentregistration.php">Parent's Corner</a>
						</div>
					</div>

					<div class="dropdown">
						<button class="dropbtn">CONTACT US</button>
					</div>

		</section>
		
		<section>
				<br><br>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	
	$roll = stripslashes($_REQUEST['roll']);
	$roll = mysqli_real_escape_string($con,$roll);
	
	$phone = stripslashes($_REQUEST['phone']);
	$phone = mysqli_real_escape_string($con,$phone);
	
	$csection = stripslashes($_REQUEST['csection']);
	$csection = mysqli_real_escape_string($con,$csection);	
	
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, roll, phone, csection, Password, email, trn_date)
VALUES ('$username','$roll','$phone','$csection','".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
           echo "<script type='text/javascript'> alert('Registered Successfully');location.href='teacherregistration.php'</script>";
        }
    }else{
?>
				<div class="container-fluid">
					<h1 style="text-align:center; font-size:35px; color:#96a274;"> Registration Form </h1>
					<form name="" action="" method="post">
					<div class="col-md-6" style="padding-left:25%; border-right:1px solid black">
					
					<p>Teacher Name<span style="color:red">*</span></p>
					<span class="icon-case">
					<i class="fa fa-male"></i></span>
					<input type="text" class="input1" name="username" required>
					<br><br><br><br>
					
					
					
					<p>Enroll ID No.<span style="color:red">*</span></p>
					<span class="icon-case">
					<i class="fa fa-home"></i></span>
					<input type="text" class="input1" name="roll" required>
					<br><br><br><br>
					
					<p>Phone Number<span style="color:red">*</span></p>
					<span class="icon-case">
					<i class="fa fa-phone"></i></span>
					<input type="number" class="input1" name="phone" required>
					
					</div>
					
					<div class="col-md-6">
			
					<p>Class Section<span style="color:red">*</span></p>
					<span class="icon-case">
					<i class="fa fa-phone"></i></span>
					<input type="text" class="input" name="csection" required>
					<br><br><br><br>
					
					<p>Password<span style="color:red">*</span></p>
					<span class="icon-case">
					<i class="fa fa-star"></i></span>
					<input type="text" class="input" name="password" required>
					<br><br><br><br>
					
					<p>Email Id<span style="color:red">*</span></p>
					<span class="icon-case">
					<i class="fa fa-pencil"></i></span>
					<input type="email" class="input"  name="email" required>
					
					
					</div>
					<div class="row" style="margin-left:25%">
				
				<p>
				<input type="submit" name="submit" value="Register" />
				
				</div>
				</form>
				</div>
				<?php } ?>
				
				
				
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

	</body>
	</html>
	</body>
	</html>