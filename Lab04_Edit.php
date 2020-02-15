<html>
<head>
	<title>JETS Tech Company</title>
</head>
	<body style="font-family: Bahnschrift; position: relative; background-image: linear-gradient(rgba(255,255,255,1),rgba(155,155,155,0.30)), url(bg.png); background-size: 100%; background-position: center;">
		<div style = "background-color: black">
			<a href ="Lab01_Homepage.php"><img src="1.2.jpg" style = "width: 100px; height: 100x; padding-left: 10px; float: left"></a>
			<li style = "text-align: right; overflow: hidden; list-style-type: none; padding: 25px 40px 20px 0px; font-family: Bahnschrift;  margin-top: -8px">
			<a onmouseover="this.style.color='lightgray';" onmouseout="this.style.color='white';" style = "text-decoration: none; color: white" href="Lab01_Display.php">APPLICANTS</a> &nbsp | &nbsp
			<a onmouseover="this.style.color='lightgray';" onmouseout="this.style.color='white';" style = "text-decoration: none; color: white" href="Lab01_Homepage.php">LOG OUT</a></li>
		</div>
		<form method="post" action="Lab04_Edit_Data.php">
			<br/><br/><br/><br/><br/><br/>
			<div style="text-align: center">
				Choose Field: <br/>
				<input list="Details" placeholder="Details" name="details" size="50" onmouseover="this.style.background='whitesmoke';" onmouseout="this.style.background='white';">
				<datalist id="Details">
				<option value="ENameOfSchool">
				<option value="EBasic">
				<option value="EPeriodFrom">
				<option value="EPeriodTo">
				<option value="EHighestLevel">
				<option value="EYearGraduated">
				<option value="HSNameOfSchool">
				<option value="HSBasic">
				<option value="HSPeriodFrom">
				<option value="HSPeriodTo">
				<option value="HSHighestLevel">
				<option value="HSYearGraduated">
				<option value="VNameOfSchool">
				<option value="VBasic">
				<option value="VPeriodFrom">
				<option value="VPeriodTo">
				<option value="VHighestLevel">
				<option value="VYearGraduated">
				<option value="CNameOfSchool">
				<option value="CBasic">
				<option value="CPeriodFrom">
				<option value="CPeriodTo">
				<option value="CHighestLevel">
				<option value="CYearGraduated">
				<option value="GSNameOfSchool">
				<option value="GSBasic">
				<option value="GSPeriodFrom">
				<option value="GSPeriodTo">
				<option value="GSHighestLevel">
				<option value="GSYearGraduated">
				</datalist><br/><br/>
				Change to:<br/>
				<input type="text" name = "change" placeholder="Change to..." size="50" onmouseover="this.style.background='whitesmoke';" onmouseout="this.style.background='white';">
			</div>
			<br/><br/><br/><br/><br/><br/><br/>
			<input type="submit" value="Update" style = "background-color: black; border: none; border-radius: 30px;color: white;padding: 15px 32px;text-align: center;text-decoration: nonedisplay: inline-block;font-size: 16px; margin-left: 600px" onmouseover="this.style.background='gray';" onmouseout="this.style.background='black';">
			<br/><br/>
			<?php $num = $_POST['id'];
			echo "<input type='hidden' value='$num' name='id1'>"?>
		</form>
	</body>
</html>