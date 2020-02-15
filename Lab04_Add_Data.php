<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$field = $_POST['details'];
		$change = $_POST['change'];
		$id = $_POST['id1'];
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
		
		$sql = "UPDATE education SET $field = '$change' where TIN = '$id'";
		if ($conn->query($sql) === TRUE) { 
			header("Location: Lab01_Display.php");
		}
		else { 
			echo "Error updating record: " . $conn->error;
		}
	$conn->close(); 
	}
?>