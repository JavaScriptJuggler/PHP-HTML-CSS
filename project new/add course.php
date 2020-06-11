<?php
include 'leftbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Course</title>
	<link rel="stylesheet" type="text/css" href="css\add course.css">
</head>
<body bgcolor="#e7e7e7"><br><br><center><h2>Welcome Admin!!</h2></center><br><br><br>

<center><fieldset>
<legend><b>Add Course</b></legend>
<form method="post">
	<b>Short Name:</b><input type="text" name="t1" placeholder="Short Name"><br><br>
	<b>Full Name:</b><input type="text" name="t2" placeholder="Full Name"><br><br>
	<b>Date:</b> <input type="date" name="t3"><br><br><br>
	<center><input type="submit" name="b1" value="Go" id="b1"></center>
	</form>
</fieldset></center>
</body>
</html>
<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
		if ($_POST) {
			# code...
			$a=$_POST['t1'];
			$b=$_POST['t2'];
			$c=$_POST['t3'];
			mysql_query("insert into course(name,fname,date) values('$a','$b','$c')");
			echo '<script>alert("Course Added");</script>';
		}
 ?>