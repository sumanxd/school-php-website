<!DOCTYPE>
<html>
<head>
<title>Update Data</title>
</head>
<body>

<?php 
$con=mysqli_connect("localhost","root","","dbtuts");
if(mysqli_errno($con))
{
    echo "Can't Connect to mySQL:".mysqli_connect_error();
}

if(isset($_POST['class']))
{
$name = $_POST['class'];

$fetch="SELECT class,subject,topic,marks,file FROM tbl_uploads WHERE class = '".$name."'";
$result = mysqli_query($con,$fetch);
if(!$result)
{
echo "Error:".(mysqli_error($con));
}
//display the table
echo '<table border="1">'.'<tr>'.'<td align="center">'. 'From Database'. '</td>'.'</tr>';
echo '<tr>'.'<td>'.'<table border="1">'.'<tr>'.'<td>'.'class'.'</td>'.'<td>'.'subject'.'</td>'.'<td>'. 'topic' .'</td>'.'<td>'. 'marks'. '</td>'.'<td>'. 'file' .'</td>'.'</tr>';
//while($data = mysqli_fetch_row($fetch))
while($data=mysqli_fetch_row($result))  
    {
    echo ("<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td></tr>");
    }
echo '</table>'.'</td>'.'</tr>'.'</table>';
}
?>

</body>
</html>