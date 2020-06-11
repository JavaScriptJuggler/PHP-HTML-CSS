<?php
include 'leftbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="css\view course.css">
</head>
<body bgcolor="#e7e7e7"><br><br><center><h2>Welcome Admin!!</h2></center><br><br><br>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("project",$con);
	$result=mysql_query("select * from login1");
?>
<?php
if (isset($_POST['deletebutton'])) {
	# code...
	$key=$_POST['keytodlt'];
	
	
	
			mysql_query("delete from login1 where user='$key'");
			mysql_query("delete from details where name='$key'");
			mysql_query("delete from marks where name='$key'");
			echo '<script>alert("Deleted");</script>';
			
	}
	if (isset($_POST['updatebutton'])) {
	# code...
	$key=$_POST['keytodlt'];
	
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	
			mysql_query("update login1 set user='$a',pass='$b' where user='$key'");
			mysql_query("update details set name='$a',pass='$b' where name='$key'");
			mysql_query("update marks set name='$a' where name='$key'");
			echo '<script>alert("Changed");</script>';
			
	}

?>
<center><table id="tbl1" >
<tr>
		<th>User Name</th>
		<th>Password</th>
		
		
		
	</tr>

	<?php
	
			while ($row=mysql_fetch_array($result)) {?>
<tr>
<form method="post">
				<td id='td2'><input type="text" value="<?php echo $row['user'];?>" name="t1"></td>
				<td id='td1'><input type="text" value="<?php echo $row['pass'];?>" name="t2"></td>
			
				
				<td><input type="checkbox" name="keytodlt" value="<?php echo $row['user'] ?>" required></td>
				<td><input type="submit" value="Delete" id="b1" name="deletebutton"></td>
				<td><input type="submit" value="Update" id="b2" name="updatebutton"></td>

</form>
</tr><?php } ?></table></center>
</body>
</html>