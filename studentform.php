<?php
require('dbstudent.php');
include("auth.php");
include_once 'dbconfig.php';

?>
<html>

	<head>
		
		<title>Student Form</title> 
		
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
						  .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
	position:relative;
	top:6px;
    padding: 11px 19px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
}
.button2 {background-color: #008CBA;}
						  
			select {
    
  /* styling */
  background-color: white;
  border: thin solid blue;
  top:7px;
  border-radius: 4px;
  position:relative;
  left:520px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;

  /* reset */

  margin: 0;      
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}


/* arrows */

select.classic {
  background-image:
    linear-gradient(45deg, transparent 50%, blue 50%),
    linear-gradient(135deg, blue 50%, transparent 50%),
    linear-gradient(to right, skyblue, skyblue);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
}

select.classic:focus {
  background-image:
    linear-gradient(45deg, white 50%, transparent 50%),
    linear-gradient(135deg, transparent 50%, white 50%),
    linear-gradient(to right, gray, gray);
  background-position:
    calc(100% - 15px) 1em,
    calc(100% - 20px) 1em,
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
  border-color: grey;
  outline: 0;
}
select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}			  
						  
		#output.alert-success{
    background: rgb(25, 204, 25);
}

#output.alert-danger{
    background: rgb(228, 105, 105);
}.login-container{
    position: relative;
    width: 355px;
    margin: 15px 244px;
    padding: 20px 40px 40px;
    text-align: center;
    background: #fff;
    border: 1px solid #ccc;
}

#output{
    position: absolute;
    width: 300px;
    top: -75px;
    left: 0;
    color: #fff;
}



.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;

}

.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
     -moz-transform: rotateZ(-2deg);
      -ms-transform: rotateZ(-2deg);

}

.avatar{
    width: 100px;height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #aaa;
    background-size: cover;
}

.form-box input{
    width: 100%;
    padding: 10px;
    text-align: center;
    height:40px;
    border: 1px solid #ccc;;
    background: #fafafa;
    transition:0.2s ease-in-out;

}

.form-box input:focus{
    outline: 0;
    background: #eee;
}

.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
    text-transform: lowercase;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}

.form-box button.login{
    margin-top:15px;
    padding: 10px 20px;
}

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
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
			</a>
			</p>
		</div>
	<section>

<div class="row">
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
		<img src="images/10.jpg" style="width:100%;height:30%">
	</section>
	
	<section>

	<div class="container-fluid"  >
   	 <h1 style="text-align:center;">Student Page</h1>
	 
	 <div class="row" style="margin-top:40px;overflow:hidden;">
					<ul class="nav nav-pills" style="overflow:hidden;border:2px solid blue;font-size:21px;text-transform:uppercase;font-family:roboto;background-color:lightgreen;border-top-left-radius:25px;border-top-right-radius:25px;overflow:hidden;" id="tabs">
						
						
						<li ><a href="#" name="tab1" style="color:white;     margin-left: 391px;"><strong>View Assignments</strong></a></li>
						<li ><a href="#" name="tab2" style="color:white;"><strong>Submit Assignments</strong></a></li>
						
					</ul>
			<div id="content" style="border:1px solid blue;">
						
						
					
					
			<div id="tab1" >
					
					
				<div class="row col-md-12 custyle">
				
<form name="form_update" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="">
	<select name="class" style="    position: relative;
    left: 521px;
    padding: 9px 51px;
    top: 6px;" required>
<option>--Select Class From Here--</option>
<option name="class">1</option>
	  <option name="class">2</option>
	  <option name="class">3</option>
	  <option name="class">4</option>
	  <option name="class">5</option>
	  <option name="class">6</option>
	  <option name="class">7</option>
	  <option name="class">8</option>
	  <option name="class">9</option>
	  <option name="class">10</option>
	  <option name="class">11</option>
	  <option name="class">12</option>
</select>
	</div>
<input type="submit" class="button button2" style="margin-left: 619px;" name="submit" value="Submit"/>
</form>

<div  class="table-responsive">
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Class Id</td>
							<td>Subject Name</td>
							<td>Topic</td>
							<td>Total marks</td>
							<td>Date Of Submission</td>
							<td>File Name</td>							
							<td>View</td>
							</tr>
<?php
if(isset($_POST['class']))
{
$name = $_POST['class'];

$fetch="SELECT class,subject,topic,marks,date,file FROM tbl_uploads WHERE class = '".$name."'  LIMIT 0, 30";
$result = mysqli_query($con,$fetch);


						
if(!$result)
{
echo "Error:".(mysqli_error($con));
}

							
							while($data=mysqli_fetch_assoc($result))  
							{
								?>
								<tr>
								
								<td><?php echo $data['class'] ?></td>
								<td><?php echo $data['subject'] ?></td>
								<td><?php echo $data['topic'] ?></td>
								<td><?php echo $data['marks'] ?></td>
								<td><?php echo $data['date'] ?></td>
								<td><?php echo $data['file'] ?></td>
								
								<td><a href="uploads/<?php echo $data['file'] ?>" target="_blank">view file</a></td>
								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>

				</div>

			</div>
				
				<div id="tab2">
							
				
					<div class="container" style="margin-left:200px;">

			
						<form action="uploadnew.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()"  id="myfrm1">
								   
									
							<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
								


	<div class="">
	<select name="class" style="    position: relative;
    left: -2px;
    padding: 9px 51px;
    top: -4px;" required>
<option>--Select Class From Here--</option>
	  <option name="class">1</option>
	  <option name="class">2</option>
	  <option name="class">3</option>
	  <option name="class">4</option>
	  <option name="class">5</option>
	  <option name="class">6</option>
	  <option name="class">7</option>
	  <option name="class">8</option>
	  <option name="class">9</option>
	  <option name="class">10</option>
	  <option name="class">11</option>
	  <option name="class">12</option>
</select>
	</div>
	
	
 <input name="subject" type="text" placeholder="Subject Name" required> 
  <input name="student" type="text" placeholder="Student Name" required> 
	<input name="date" type="date" placeholder="Date Of Submission" required>																											

									<div class="">
										<p> <span></span></p>
										
										
										<div class="image-upload">
										  

										  <input id="file-input" type="file" name="file" required/>

										</div>	
									</div>									
							
									<button type="submit" class="btn btn-info btn-block login" name="btn-upload">Submit</button>
									
								  </div>
        </div>
		</div>
						</form>	
			
					</div>
				</div>
				
			</div>
			<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script>
      $("#content").find("[id^='tab']").hide(); // Hide all content
      $("#tabs li:first").attr("id","current"); // Activate the first tab
      $("#content #tab1").fadeIn(); // Show first tab's content

      $('#tabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
          return;
        } else {
          $("#content").find("[id^='tab']").hide(); // Hide all content
          $("#tabs li").attr("id",""); //Reset id's
          $(this).parent().attr("id","current"); // Activate this
          $('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
        }

        var tab = $(this).attr("name");
        localStorage.setItem("tab", tab);
      });

      var currTab = localStorage.getItem("tab");
      $('a[name="' + currTab + '"]').trigger("click");
    </script>
		</div>
	 
	</div>
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

</body>
</html>