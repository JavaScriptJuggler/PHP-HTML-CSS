<?php
include 'leftbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Marks</title>
	<link rel="stylesheet" type="text/css" href="css\marks.css">

</style>
</head>
<body bgcolor="#e7e7e7"><br><br><center><h2>Welcome Admin!!</h2></center><br><br><br>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("project",$con);
	$result=mysql_query("select * from marks");
?>
<?php
if (isset($_POST['deletebutton'])) {
	# code...
	$key=$_POST['keytodlt'];

	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];

	
			mysql_query("update marks set mod1='$a',mod2='$b',mod3='$c',mod4='$d',mod5='$e',total='$f' where name='$key'");
			echo '<script>alert("Inserted");</script>';
		
	}
?>

<div id="div1">
<center><table id="tb1" >
<tr>
		<th>Name</th>
		<th>Roll</th>
		<th>Module 1</th>
		<th>Module 2</th>
		<th>Module 3</th>
		<th>Module 4</th>
		<th>Module 5</th>
		<th>Total</th>
		
		
	</tr>
	<?php
	while ($row=mysql_fetch_array($result)) {?>
<tr>
<form method="post" name="f1">
				<td id='td2'><input type="text" value="<?php echo $row['name'];?>" disabled></td>
				<td id='td1'><input type="text" value="<?php echo $row['roll'];?>" disabled></td>
				<td id='td2'><input type="text" value="<?php echo $row['mod1'];?>" name="t1" ></td>
				<td id='td1'><input type="text" value="<?php echo $row['mod2'];?>" name="t2" ></td>
				<td id='td2'><input type="text" value="<?php echo $row['mod3'];?>" name="t3" ></td>
				<td id='td1'><input type="text" value="<?php echo $row['mod4'];?>" name="t4" ></td>
				<td id='td2'><input type="text" value="<?php echo $row['mod5'];?>" name="t5" ></td>
				<td id='td1'><input type="text" value="<?php echo $row['total'];?>" name="t6"></td>
				<td><input type="checkbox" name="keytodlt" value="<?php echo $row['name'] ?>" required></td>
				
				<td><input type="submit" value="Insert" id="b1" name="deletebutton"></td>

</form>
</tr><?php } ?></table></center></div>
</body>
</html>
