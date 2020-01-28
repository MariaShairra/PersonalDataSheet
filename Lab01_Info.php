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
		<div style=" margin:0px 100px; padding-top: 50px">
			<p style = "color: Orange; font-size: 53px; padding-top: 10px; text-align: center"><b>Applicant's Information</b></p></div>
			<div style=" margin:0px 130px; font-size: 15pt; padding-left: 30px; ">
			<?php
			   $servername = "localhost";
			   $username = "root";
			   $password = "";
			   $database = "pdatasheet";
			   $name = $_POST['id1'];
			   // Create connection
			   $conn = new mysqli($servername, $username, $password, $database);
			   // Check connection
			   if ($conn->connect_error) {
				 die("Connection failed: " . $conn->connect_error);
			   } 
			   $sql = "SELECT * FROM list where Firstname = '$name'";
			   $result = $conn->query($sql); ?>
			   <?php
				   if ($result->num_rows > 0) {
					 // output data of each row
					 if($row = $result->fetch_assoc()) { 
				?>
				
					<span style = "padding-left: 63px"><b>Applicant's Name:</b></span> &ensp; <?php echo $row['Firstname'] ?> <?php echo $row['Middlename'] ?> <?php echo $row['NameExtension'] ?> <?php echo $row['Surname'] ?> <br>
					<span style = "padding-left: 102px"><b>Date Of Birth:</b></span> &ensp; <?php echo $row['DateOfBirth'] ?> <br>
					<span style = "padding-left: 94px"><b>Place Of Birth:</b></span> &ensp; <?php echo $row['PlaceOfBirth'] ?> <br>
					<span style = "padding-left: 184px"><b>Sex:</b></span> &ensp; <?php echo $row['Sex'] ?> <br>
					<span style = "padding-left: 116px"><b>Civil Status:</b></span> &ensp; <?php echo $row['CivilStatus'] ?> <br>
					<span style = "padding-left: 159px"><b>Height:</b></span> &ensp; <?php echo $row['Height'] ?> <br>
					<span style = "padding-left: 156px"><b>Weight:</b></span> &ensp; <?php echo $row['Weight'] ?> <br>
					<span style = "padding-left: 120px"><b>Blood Type:</b></span> &ensp; <?php echo $row['BloodType'] ?> <br>
					<span style = "padding-left: 116px"><b>GSIS ID No.:</b></span> &ensp; <?php echo $row['GSIS'] ?> <br>
					<span style = "padding-left: 75px"><b>PAG-IBIG ID No.:</b></span> &ensp; <?php echo $row['PAGIBIG'] ?> <br>
					<span style = "padding-left: 66px"><b>PHILHEALTH No.:</b></span> &ensp; <?php echo $row['PHILHEALTH'] ?> <br>
					<span style = "padding-left: 146px"><b>SSS No.:</b></span> &ensp; <?php echo $row['SSS'] ?> <br>
					<span style = "padding-left: 152px"><b>TIN No.:</b></span> &ensp; <?php echo $row['TIN'] ?> <br>
					<span style = "padding-left: 0px"><b>Agency Employment No.:</b></span> &ensp; <?php echo $row['AgencyEmployment'] ?> <br>
					<span style = "padding-left: 119px"><b>Citizenship:</b></span> &ensp; <?php echo $row['Citizenship'] ?> <br>
					<span style = "padding-left: 42px"><b>(If Dual Citizenship):</b></span> &ensp; <?php echo $row['DualC'] ?> <br>
					<span style = "padding-left: 148px"><b>Country:</b></span> &ensp; <?php echo $row['Country'] ?> <br>
					<span style = "padding-left: 38px"><b>Residential Address:</b></span> &ensp; <?php echo $row['Rhouse'] ?> <?php echo $row['Rstreet'] ?> <?php echo $row['Rsubd'] ?> <?php echo $row['Rbrgy'] ?> <?php echo $row['Rcity'] ?> <?php echo $row['Rprovince'] ?> <?php echo $row['RZipCode'] ?> <br>
					<span style = "padding-left: 39px"><b>Permanent Address:</b></span> &ensp; <?php echo $row['Phouse'] ?> <?php echo $row['Pstreet'] ?> <?php echo $row['Psubd'] ?> <?php echo $row['Pbrgy'] ?> <?php echo $row['Pcity'] ?> <?php echo $row['Pprovince'] ?> <?php echo $row['PZipCode'] ?> <br>
					<span style = "padding-left: 92px"><b>Telephone No.:</b></span> &ensp; <?php echo $row['Telephone'] ?> <br>
					<span style = "padding-left: 124px"><b>Mobile No.:</b></span> &ensp; <?php echo $row['Mobile'] ?> <br>
					<span style = "padding-left: 87px"><b>Email Address:</b></span> &ensp; <?php echo $row['Email'] ?>
				
			<?php
				 }   	
			   } else echo "Database is empty"; 
				$conn->close(); 
			?>
			<br><br><br>
		</div>
	</body>
</html>