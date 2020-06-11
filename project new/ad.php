<?php
include 'leftbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css\dashboard.css">
</head>

<body bgcolor="#e7e7e7"><br><br><center><h2>Welcome Admin!!</h2></center><br><br><br>
<?php
	$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
$country=mysql_query("select * from country");
$course=mysql_query("select * from course");
$state=mysql_query("select * from state");
$nation=mysql_query("select * from nation");
 ?>
<div><form method="post"><center>
<fieldset id="f1">
	<legend>Register</legend>

	
	Name: <input type="text" name="t2" placeholder="Name"><br><br>
	Password: <input type="text" name="t3" placeholder="Password"><br><br>
	Roll Number: <input type="text" name="t4" placeholder="Roll Number"><br><br>
	</fieldset></center><br>


	<center><fieldset id="f2">
	
		
	
		Course:<select name="t5">
		<?php while ( $row=mysql_fetch_array($course)) {?>
			<option value="<?php echo $row['name']?>"><?php echo $row['name']?></option><?php }?></select><br><br>
		Phone Number:<input type="text" name="t6" placeholder="Phone"><br><br>
		
		Country:<select name="t7">
		<?php while ( $row1=mysql_fetch_array($country)) {?>
			<option value="<?php echo $row1['country']?>"><?php echo $row1['country']?></option><?php }?>
			</select><br><br>
			State:<select name="t8">
			<?php while ( $row2=mysql_fetch_array($state)) {?>
				<option value="<?php echo $row2['state']?>"><?php echo $row2['state']?></option><?php }?>
			</select><br><br>
			Nationality:<select name="t9">
			<?php while ( $row3=mysql_fetch_array($nation)) {?>
				<option value="<?php echo $row3['nation']?>"><?php echo $row3['nation']?></option><?php }?>
			</select><br><br>
			<center><input type="submit" name="c1" name="Submit"></center>
	</fieldset></center></form>
</div>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
/*if (isset($_POST['c1'])) {
	# code...
	$gen=$_POST['c1'];
}*/
if($_POST){

$name=$_POST['t2'];
$password=$_POST['t3'];
$roll=$_POST['t4'];
$course=$_POST['t5'];
$ph=$_POST['t6'];
$country=$_POST['t7'];
$state=$_POST['t8'];
$nation=$_POST['t9'];
$sql=mysql_query("select * from details where roll='$roll'");
	if(mysql_num_rows($sql)==0){
mysql_query("insert into details(name,pass,roll,course,ph,country,state,nation) values('$name','$password','$roll','$course','$ph','$country','$state','$nation')");
mysql_query("insert into login1(user,pass) values('$name','$password')");
mysql_query("insert into marks(name,roll) values('$name','$roll')");
echo '<script>alert("Entry Sucessfull");</script>';
	}
	else{
		echo '<script>alert("Invalid Entry..Roll Number already Present");</script>';
	}
}
?>