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
		<br><br>
		<p style = "color: Orange; font-size: 45px; padding-top: 10px; text-align: center"><b>Applicant's Educational Background</b></p>
		<?php
		   $servername = "localhost";
		   $username = "root";
		   $password = "";
		   $database = "pdatasheet";
		   $tin = $_POST['id1'];
		   // Create connection
		   $conn = new mysqli($servername, $username, $password, $database);
		   // Check connection
		   if ($conn->connect_error) {
			 die("Connection failed: " . $conn->connect_error);
		   } 
		   $sql = "SELECT * FROM education where TIN = '$tin'";
		   $result = $conn->query($sql); ?>
		   <?php
				   if ($result->num_rows > 0) {
					 // output data of each row
					 if($row = $result->fetch_assoc()) { 
				?>
		   <table style = "text-align: center; margin: 15px 15px -3px 150px; font-size: 12px; font-family: sans-serif; background-color: whitesmoke;">
		   <tr> <thead>
			  <th style = "padding: 10px; border-style: hidden; border-right-style: 0.75 solid black;">Level</th>
			  <th style = "padding: 10px; border-style: hidden; border-right-style: 0.75 solid black;">Name of School</th>
			  <th style = "padding: 10px; border-style: hidden; border-right-style: 0.75 solid black;">Basic Education/Degree/Course</th>
			  <th style = "padding: 10px; border-style: hidden; border-right-style: 0.75 solid black;">From</th>
			  <th style = "padding: 10px; border-style: hidden; border-right-style: 0.75 solid black;">To</th>
			  <th style = "padding: 10px; border-style: hidden; border-right-style: 0.75 solid black;">Highest Level Earned/Units Earned</th>
			  <th style = "padding: 10px; border-style: hidden; border-right-style: 0.75 solid black;">Year Graduated</th>
			  <th style = "padding: 10px; border-style: hidden; border-right-style: 0.75 solid black;">Add</th>
			  <th style = "padding: 10px; border-style: hidden; border-right-style: 0.75 solid black;">Edit</th>
			  <th style = "padding: 10px; border-style: hidden;">Delete</th>
		   </thead> </tr>
				<tr>
				<td>Elementary</td>
				<td><?php echo $row['ENameOfSchool'] ?> </td>
				<td><?php echo $row['EBasic'] ?> </td>
				<td><?php echo $row['EPeriodFrom'] ?> </td>
				<td><?php echo $row['EPeriodTo'] ?> </td>
				<td><?php echo $row['EHighestLevel'] ?> </td>
				<td><?php echo $row['EYearGraduated'] ?> </td>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Add.php'><input type='hidden' value='$num' name='id'><button style='background-color: #4CAF50; border: 0.5 solid black; border-radius: 3px'>Add</button></form></td>";?>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Edit.php'><input type='hidden' value='$num' name='id'><button style='background-color: blue; border: 0.5 solid black; border-radius: 3px'>Edit</button></form></td>";?>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Delete.php'><input type='hidden' value='$num' name='id'><button style='background-color: red; border: 0.5 solid black; border-radius: 3px';>Delete</button></form></td>";?>
				</tr>
				<tr>
				<td>Secondary</td>
				<td><?php echo $row['HSNameOfSchool'] ?> </td>
				<td><?php echo $row['HSBasic'] ?> </td>
				<td><?php echo $row['HSPeriodFrom'] ?> </td>
				<td><?php echo $row['HSPeriodTo'] ?> </td>
				<td><?php echo $row['HSHighestLevel'] ?> </td>
				<td><?php echo $row['HSYearGraduated'] ?> </td>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Add.php'><input type='hidden' value='$num' name='id'><button style='background-color: #4CAF50; border: 0.5 solid black; border-radius: 3px'>Add</button></form></td>";?>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Edit.php'><input type='hidden' value='$num' name='id'><button style='background-color: blue; border: 0.5 solid black; border-radius: 3px'>Edit</button></form></td>";?>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Delete.php'><input type='hidden' value='$num' name='id'><button style='background-color: red; border: 0.5 solid black; border-radius: 3px';>Delete</button></form></td>";?>
				</tr>
				<tr>
				<td>Vocational/Trade Course</td>
				<td><?php echo $row['VNameOfSchool'] ?> </td>
				<td><?php echo $row['VBasic'] ?> </td>
				<td><?php echo $row['VPeriodFrom'] ?> </td>
				<td><?php echo $row['VPeriodTo'] ?> </td>
				<td><?php echo $row['VHighestLevel'] ?> </td>
				<td><?php echo $row['VYearGraduated'] ?> </td>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Add.php'><input type='hidden' value='$num' name='id'><button style='background-color: #4CAF50; border: 0.5 solid black; border-radius: 3px'>Add</button></form></td>";?>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Edit.php'><input type='hidden' value='$num' name='id'><button style='background-color: blue; border: 0.5 solid black; border-radius: 3px'>Edit</button></form></td>";?>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Delete.php'><input type='hidden' value='$num' name='id'><button style='background-color: red; border: 0.5 solid black; border-radius: 3px';>Delete</button></form></td>";?>
				</tr>
				<tr>
				<td>College</td>
				<td><?php echo $row['CNameOfSchool'] ?> </td>
				<td><?php echo $row['CBasic'] ?> </td>
				<td><?php echo $row['CPeriodFrom'] ?> </td>
				<td><?php echo $row['CPeriodTo'] ?> </td>
				<td><?php echo $row['CHighestLevel'] ?> </td>
				<td><?php echo $row['CYearGraduated'] ?> </td>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Add.php'><input type='hidden' value='$num' name='id'><button style='background-color: #4CAF50; border: 0.5 solid black; border-radius: 3px'>Add</button></form></td>";?>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Edit.php'><input type='hidden' value='$num' name='id'><button style='background-color: blue; border: 0.5 solid black; border-radius: 3px'>Edit</button></form></td>";?>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Delete.php'><input type='hidden' value='$num' name='id'><button style='background-color: red; border: 0.5 solid black; border-radius: 3px';>Delete</button></form></td>";?>
				</tr>
				<tr>
				<td>Graduate Studies</td>
				<td><?php echo $row['GSNameOfSchool'] ?> </td>
				<td><?php echo $row['GSBasic'] ?> </td>
				<td><?php echo $row['GSPeriodFrom'] ?> </td>
				<td><?php echo $row['GSPeriodTo'] ?> </td>
				<td><?php echo $row['GSHighestLevel'] ?> </td>
				<td><?php echo $row['GSYearGraduated'] ?> </td>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Add.php'><input type='hidden' value='$num' name='id'><button style='background-color: #4CAF50; border: 0.5 solid black; border-radius: 3px'>Add</button></form></td>";?>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Edit.php'><input type='hidden' value='$num' name='id'><button style='background-color: blue; border: 0.5 solid black; border-radius: 3px'>Edit</button></form></td>";?>
				<?php $num = $row['TIN'];
				echo "<td><form method='post' action='Lab04_Delete.php'><input type='hidden' value='$num' name='id'><button style='background-color: red; border: 0.5 solid black; border-radius: 3px';>Delete</button></form></td>";?>
				</tr>
		   </table>
		   
		   <?php
					 }
				   }
			$conn->close(); 
			?>
	</body>
</html>