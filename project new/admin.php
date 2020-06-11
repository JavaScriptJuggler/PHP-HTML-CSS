<?php 
if ($_POST) {
	# code...
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("project",$con);
	$result=mysql_query("select * from login where user='$a' and pass='$b'");
		# code...
				$row=mysql_fetch_array($result);
				if($row['user']==$a && $row['pass']==$b){
					
					echo'<script>window.location="ad.php";</script>';
					
				}
				else{
					$result=mysql_query("select * from login1 where user='$a' and pass='$b'");
					$row=mysql_fetch_array($result);
				if($row['user']==$a && $row['pass']==$b){
					
					echo'<script>window.location="us.php";</script>';
				}

	}
}

 ?>