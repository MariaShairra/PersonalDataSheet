<html>
<head>
	<title>JETS Tech Company</title>
</head>
	<body>
	<div style="position: relative; background-image: linear-gradient(rgba(0,0,0,0.10),rgba(0,0,0,0.10)), url(1.1.png); height: 98.5vh; background-size: cover; background-position: center;">
		<div style = "background-color: black">
			<a href ="Lab01_Homepage.php"><img src="1.2.jpg" style = "width: 100px; height: 100x; padding-left: 10px; float: left"></a>
			<li style = "text-align: right; overflow: hidden; list-style-type: none; padding: 25px 40px 20px 0px; font-family: Bahnschrift;  margin-top: -8px">
			<a onmouseover="this.style.color='lightgray';" onmouseout="this.style.color='white';" style = "text-decoration: none; color: white" href="#">CONTACT</a></li>
		</div>
		<form method="post" name="myform" action="<?php echo $_SERVER['PHP_SELF'];?>">
			
				<br><br><br>
				<p style = "text-align: center-left; font-size: 55px; font-family:Century Gothic; margin-left: 3%" ><b>Welcome to <br>JETS Tech Company</b></p>
				<br><br><br>
				<input type="button" onclick="location.href='Lab01_Form.php';" value="Apply Now !" style = "background-color: black; border: none; margin-left:8%;border-radius: 30px;color: white;padding: 15px 32px;text-align: center;text-decoration: nonedisplay: inline-block;font-size: 16px;" onmouseover="this.style.background='gray';" onmouseout="this.style.background='black';"> &nbsp &nbsp &nbsp &nbsp
				
				
				<input type="button" onclick="location.href='Lab01_login.php';" value="Applicants Page" style = "background-color: black; border: none; border-radius: 30px;color: white;padding: 15px 32px;text-align: center;text-decoration: nonedisplay: inline-block;font-size: 16px;" onmouseover="this.style.background='gray';" onmouseout="this.style.background='black';">
		</form>
	</div>
	</body>
</html>