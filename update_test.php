<?php
require('dbstudent.php');
include("auth.php");
include_once 'dbconfig.php';

?>
<!DOCTYPE>
<html>
<head>
<title>Update Data</title>
</head>
<body>
<div  class="table-responsive">
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Class Id</td>
							<td>Subject Name</td>
							<td>Topic</td>
							<td>Total marks</td>
							<td>File Name</td>							
							<td>View</td>
							</tr>
<?php
if(isset($_POST['class']))
{
$name = $_POST['class'];

$fetch="SELECT class,subject,topic,marks,file FROM tbl_uploads WHERE class = '".$name."'";
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
								<td><?php echo $data['file'] ?></td>
								
								<td><a href="uploads/<?php echo $data['file'] ?>" target="_blank">view file</a></td>
								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>
</body>
</html>