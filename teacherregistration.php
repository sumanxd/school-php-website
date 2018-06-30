<html>

	<head>
		<title>teacherform</title> 
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta charset="utf-8">
         
		<link rel="stylesheet" type="text/css" href="teacher admin page.css">
	</head>
	
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: teacherform.php");
         }else{
	echo "<script type='text/javascript'> alert('Username or password is incorrect');location.href='teacherregistration.php'</script>";

	}
    }else{
?>	
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
		
		<img src="images/12.jpg" style="width:100%;height:56%">
		
		<section>
	 <br><br>
		<div class="col-md-8" >
		<h2>Teacher's Corner</h2>
		<p style="font-size:16px;text-align:justify">Azra’s philosophy is founded on the belief that education is about fun-filled learning, enjoyable and relevant
		 to today’s world, while unleashing the creative potential of the child. Learning at our School is 
		child-centered and growth oriented.</p>
		<p style="font-size:16px;text-align:justify">Responding to the needs, and filling an important gap in the community. Azra Public 
		School’s only aim is to bring out the best in a child in various aspects. Year after year recording 100% results in 
		the 10th class, Co-educational in character it is an English medium school recognized by the Central Board of 
		Secondary Education (C.B.S.E)</p>
		</div>		
		<br><br>		
	
<div class="col-md-4">
<form action="" method="post" name="login">
<p><input type="text" class="sam" name="username" placeholder="enter user name" required></p>	
<p><input type="password" class="sam" name="password" placeholder="enter password" required></p>
<input name="submit" type="submit" value="Login" />
</form>
<p>Not Registered? <a href="signinteacher.php"><strong>SIGN IN</strong></a></span></p>
</div>
<?php } ?>
		</section>
		<br><br><br><br><br><br><br><br><br><br><br><br>
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