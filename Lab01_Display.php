<html>
<head>
<title>List of Applicants</title>
<style type="text/css">
table {
  width: 50%;
  counter-reset: row-num;
}
table tr {
  counter-increment: row-num;
}
table tr td:first-child::before {
    content: counter(row-num) ". ";
}
table, th, td {
   border: 0.5px solid gray;
}
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 5px;
  font-family: Bahnschrift;
  border: 0.5 solid black;
  border-radius: 5px;
  cursor: pointer;
}
/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 10px 14px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>
<body style = "text-align: center; font-family: Bahnschrift;">
	<div style = "position: relative; background-color: WhiteSmoke; height: 100vh; background-size: cover; background-position: center; text-align: center;">
		<div style = "background-color: black; position: fixed; margin-left: -8px; margin-top: -8px">
			<a href ="Lab01_Homepage.php"><img src="1.2.jpg" style = "width: 100px; height: 100x; padding-left: 10px; float: left"></a>
			<li style = "text-align: right; overflow: hidden; list-style-type: none; padding: 35px 40px 20px 0px; font-family: Bahnschrift;  margin-top: -8px; margin-left: 1247px">
			<a onmouseover="this.style.color='lightgray';" onmouseout="this.style.color='white';" style = "text-decoration: none; color: white" href="Lab01_Homepage.php">LOG OUT</a></li>
		</div>
		<br><br><br>
		<p style = "color: Orange; font-size: 53px; padding-top: 10px"><b>List of Applicants</b></p>
		
		<?php
		   $servername = "localhost";
		   $username = "root";
		   $password = "";
		   $database = "pdatasheet";
		   // Create connection
		   $conn = new mysqli($servername, $username, $password, $database);
		   // Check connection
		   if ($conn->connect_error) {
			 die("Connection failed: " . $conn->connect_error);
		   } 
		   $sql = "SELECT * FROM list ORDER BY Firstname";
		   $result = $conn->query($sql); ?>
		   <table style = "text-align: center; margin: 15px 15px -3px 320px; font-size: 12px; font-family: sans-serif; background-color: whitesmoke;">
		   <tr> <thead>
			  <th style = "width: 5px; border-style: hidden;"></th>
			  <th style = "padding: 10px; border-style: hidden; border-right-style: solid;">Applicant's Name</th>
			  <th style = "padding: 10px; border-style: hidden; border-right-style: solid;">Delete</th>
			  <th style = "padding: 10px; border-style: hidden;">Manage</th>
		   </thead> </tr>
		   </table>
		   <table style = "text-align: left; margin: 0px 15px 15px 320px; font-size: 12px; font-family: sans-serif; background-color: whitesmoke;">
		<?php
		   if ($result->num_rows > 0) {
			 // output data of each row
			 while($row = $result->fetch_assoc()) { 
		?>
				<tr>
				<td style = "width: 5px; border-style: hidden; padding-right: 20px"></td>
				
				<?php $num = $row['Firstname'];
				echo "<td style = 'border-style: hidden;'><form method='post' action='Lab01_Info.php'><input type='hidden' value='$num' name='id1'><button style ='margin-top: 0px; color: black; margin-left: -10px; margin-right: -31px; border-style: hidden; border-radius: 5px; background-color: whitesmoke; padding: 5px; font-family: Bahnschrift' ><b>"; echo $row['Firstname']; echo " "; echo $row['Middlename']; echo " "; echo $row['Surname']; echo "</b></button></form></td>";?>
				
				<?php $num = $row['Firstname'];
				echo "<td style = 'border-style: hidden;'><form method='post' action='Delete.php'><input type='hidden' value='$num' name='id'><button style ='margin-top: 0px; color: black; border: .5 solid black; border-radius: 5px; background-color: red; padding: 5px; font-family: Bahnschrift' ><b>Delete</b></button></form></td>";?>
				
				<td style="border-style: hidden; text-align: center; padding-right: 13px;"><div class="dropdown">
				  <button class="dropbtn";>Manage</button>
				  <div class="dropdown-content">
					<?php $num = $row['TIN'];
					echo "<div style = 'border-style: hidden;'><form method='post' action='Lab04_Education.php'><input type='hidden' value='$num' name='id1'><button style ='margin-top: 0px; color: black; border-style: hidden; margin-top: 5px; margin-bottom: -5px; background-color: whitesmoke; padding: 5px; font-family: Bahnschrift' >Education</button></form></div>";?>
					<?php $num = $row['TIN'];
					echo "<div style = 'border-style: hidden;'><form method='post' action='Lab04_Scholarship.php'><input type='hidden' value='$num' name='id1'><button style ='margin-top: 0px; color: black; border-style: hidden; background-color: whitesmoke; padding: 5px; font-family: Bahnschrift' >Scholarship</button></form></div>";?>
				  </div>
				</div></td>
				</tr>
		<?php
			 }   	
		   }
			$conn->close(); 
		?>
		
		</table>
	</div>
</body>
</html>