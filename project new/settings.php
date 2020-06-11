<?php
include 'leftbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		#img{
	height: 300px;
	width: 300px;
}
fieldset{
	width: 300px;
	padding: 30px;
	position: absolute;
	left: 400px;
	top:180px;
	border-radius: 10px;
	background-color: #d0d0d0;
}
legend{
	font-size: 20px;
}
fieldset input[type="text"]{
			border-style: solid;
			border-color: black;
			border-width: .6px;
			border-radius: 6px;
			position: absolute;
			width:300px;
			height: 30px;
	}
	#b1{
		height: 30px;
		width:100px;
		border-radius: 9px;
		background-color: #4eabb3;
	}
	#b1:hover{
		background-color: #66dbe5;
	}
	#img1{

		height:140px;

	}
	</style>

</head>
<body>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("project",$con);
	$result=mysql_query("select * from login");
?>
<?php
if (isset($_POST['deletebutton'])) {
	# code...
	$key=$_POST['keytodlt'];
	$user=$_POST['t1'];
	$pass=$_POST['t2'];
	
	
			mysql_query("update login set user='$user',pass='$pass' where id='$key'");
			echo '<script>alert("Inserted");</script>';
		
	}
?>
<center><img src="icon\rkms_logo.jpg" id="img1"></center>
<hr><br>
<div>
<img src="icon\ulog.png" id="img">
<fieldset>
<br>
<legend>Settings</legend>
<?php
	while ($row=mysql_fetch_array($result)) {?>
		<from method="post">
	<h3>User Name:</h3><br><input type="text" name="t1" value="<?php echo $row['user'];?>"><br><br>
	<h3>Password:</h3><br><input type="text" name="t2" value="<?php echo $row['pass'];?>"><br><br>
	<input type="checkbox" name="keytodlt" value="<?php echo $row['id'] ?>"><br><br>
	<center><input type="submit" name="deletebutton" value="Update" id="b1"></center>
 <?php } ?></from>
</fieldset></div>
</body>
</html>