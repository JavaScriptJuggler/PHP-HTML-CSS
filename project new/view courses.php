<?php
include 'leftbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Course</title>
	<link rel="stylesheet" type="text/css" href="css\view course.css">
</head>
<body bgcolor="#e7e7e7"><br><br><center><h2>Welcome Admin!!</h2></center><br><br><br>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("project",$con);
	$result=mysql_query("select * from course");
?>
<?php
if (isset($_POST['deletebutton'])) {
	# code...
	$key=$_POST['keytodlt'];
	$sql=mysql_query("select * from course where id='$key'");
	if(mysql_num_rows($sql)>0){
			mysql_query("delete from course where id='$key'");
			echo '<script>alert("Sucessfully Deleted");</script>';
			}
	}
?>

<center><table id="tbl1" >
<tr>
		<th>Short Name</th>
		<th>Full Name</th>
		<th>Date</th>
		
		
	</tr>
	<?php
	
			while ($row=mysql_fetch_array($result)) {?>
<tr>
<form method="post">
				<td id='td2'><?php echo $row['name'];?></td>
				<td id='td1'><?php echo $row['fname'];?></td>
				<td id='td2'><?php echo $row['date'];?></td>
				
				<td><input type="checkbox" name="keytodlt" value="<?php echo $row['id'] ?>" required></td>
				<td><input type="submit" value="Delete" id="b1" name="deletebutton"></td>

</form>
</tr><?php } ?></table></center>
</body>
</html>