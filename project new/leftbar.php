<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	*{
			margin: 0;
			padding: 0;
		}
		/*body{
			font-family: source Sans Pro;
			background-image: url("cloud-coloured.jpg");
			background-repeat: no-repeat;
			background-size: 100% 1000px;
			
		}*/
		#div1{
			position: absolute;
			width: 300px;
			height: 90%;
			background-color: black;
			left: -300px;
			transition: .3s;
			opacity: .8;
		}
		#div1 ul li{
			list-style-type: none;
			color: #fff;
			font-size: 20px;
			padding: 20px 24px;
			

			}
			#div1 ul li:hover{
				cursor: pointer;
				color: red;
				font-weight: bolder;
				/*background-color: green;*/
			}
			#div1 a{
			text-decoration: none;
		}
		#div1 .toggle-btn{
			position: absolute;
			top: 30px;
			left: 330px;
		}
		#div1 .toggle-btn span{
			width: 45px;
			height: 4px;
			background: black;
			display: block;
			margin-top: 4px
		}
		
		
		#div1.active{
			left: 0;
		}
		</style>
</head>
<body>
<script type="text/javascript">
	function show() {
		// body...
		document.getElementById('div1').classList.toggle('active');

	}

</script>
<div id="div1">

	<div class="toggle-btn" onclick="show()">
		<span></span>
		<span></span>
		<span></span>
	</div>

	<ul>
		<li><i class="fa fa-home">Dashboard</i></li>
		
		
			<a href="view courses.php"><li>View Course</li></a>
			<a href="add course.php"><li>Add Course</li></a>
		
		<a href="marks.php"><li>Marks</li></a>

		<a href="ad.php"><li>Registration</li></a>
		<a href="user.php"><li>Show User</li></a>
		<a href="settings1.php"><li>Admin Settings</li></a>
		<a href="login.php"><li><i>Log-Out</i></li></a></i>
	</ul>
</div>
</body>
</html>
