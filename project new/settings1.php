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

#tbl1 input[type="text"]{
			border-style: solid;
			border-color: black;
			border-width: .6px;
			border-radius: 6px;
			
			width:100px;
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
	#tbl1{
		position: absolute;
		top: 200px;
		left: 500px;
		width: 200px;
	}
	#td1{
			background-color: #eef1f3;
			padding: 20px;
		}
		#td2{
			background-color: #b6c5cd;
			padding: 20px;
		}
		#b1{
			height:35px;
			width: 110px;
			border-radius: 9px;
			background-color: #39bcba;
		}
		#b1:hover{
			background-color: #48e7e5;
		}
	</style>

</head>
<body >
<center><img src="icon\rkms_logo.jpg" id="img1"></center>
<hr><br>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("project",$con);
	$result=mysql_query("select * from login");
?>
<?php
if (isset($_POST['updatebutton'])) {
	# code...
	$key=$_POST['keytodlt'];
	
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	
			mysql_query("update login set user='$a',pass='$b' where id='$key'");
			
			echo '<script>alert("Updated");</script>';
			
	}

?>
<img src="icon\ulog.png" id="img">
<div id="div"><center><table id="tbl1" >
<tr>
		<th>Admin Name</th>
		<th>Password</th>
		
		
		
	</tr>

	<?php
	
			while ($row=mysql_fetch_array($result)) {?>
<tr>
<form method="post">
				<td id='td2'><input type="text" value="<?php echo $row['user'];?>" name="t1"></td>
				<td id='td1'><input type="text" value="<?php echo $row['pass'];?>" name="t2"></td>
			
				
				<td><input type="checkbox" name="keytodlt" value="<?php echo $row['id'] ?>" required></td>
				
				<td><input type="submit" value="Update" id="b1" name="updatebutton"></td>

</form>
</tr><?php } ?></table></center></div>




</body>
</html>