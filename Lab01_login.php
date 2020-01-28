<html>
	<head>
		<title>JETS Tech Company</title>
		<style>
			input[type=text], select {
			height: 40px;
			padding: 5px 18px;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top:5px;
			}
			input[type=password], select {
			height: 40px;
			padding: 5px 18px;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top:5px;
			}
			
			
		</style>
	</head>
	<body>
		<div style="position: relative; background-image: linear-gradient(rgba(0,0,0,0.10),rgba(0,0,0,0.10)), url(1.2.png); height: 98.5vh; background-size: cover; background-position: center;">
		<div style = "background-color: black">
			<a href ="Lab01_Homepage.php"><img src="1.2.jpg" style = "width: 100px; height: 100x; padding-left: 10px; float: left"></a>
			<li style = "text-align: right; overflow: hidden; list-style-type: none; padding: 25px 40px 20px 0px; font-family: Bahnschrift;  margin-top: -8px">
			<a onmouseover="this.style.color='lightgray';" onmouseout="this.style.color='white';" style = "text-decoration: none; color: white" href="Lab01_Homepage.php">HOME</a> &nbsp | &nbsp
			<a onmouseover="this.style.color='lightgray';" onmouseout="this.style.color='white';" style = "text-decoration: none; color: white" href="#">CONTACT</a></li>
		</div>
		<form name="login">
			<br><br><br>
			<div style = "position: center;margin: 100px 450px; background-color:white; padding: 50px; border-radius:30px; font-family:Trebuchet MS; border-style: outset; border-width: 4px ;box-shadow: 8px  8px 8px black">
				Username&emsp;<input type="text" name="userid"/><br><br>
				Password&emsp;&ensp;<input type="password" name="pswrd"/>
				<br><br><br>
				&emsp;&emsp;&emsp;<input type="button" onclick="check(this.form)" value="Login" style = "background-color: black; border: none; border-radius: 30px;color: white;padding: 15px 32px;text-align: center;" onmouseover="this.style.background='gray';" onmouseout="this.style.background='black'"/>
				&emsp;<input type="button" onclick="location.href='Lab01_Homepage.php';" value="Cancel" style = "background-color: black; border: none; border-radius: 30px;color: white;padding: 15px 32px;text-align: center;" onmouseover="this.style.background='gray';" onmouseout="this.style.background='black';"/>
			</div>
		</form>
		</div>
		<script language="javascript">
			function check(form)/*function to check userid & password*/
			{
			 /*the following code checkes whether the entered userid and password are matching*/
			 if(form.userid.value == "admin" && form.pswrd.value == "admin")
			  {
				window.open('Lab01_Display.php')/*opens the target page while Id & password matches*/
			  }
			 else
			 {
			   alert("Error Password or Username")/*displays error message*/
			  }
			}
		</script>
	</body>
</html>