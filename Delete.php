<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$id = $_POST['id'];
		$id1 = $_POST['id1'];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "pdatasheet";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		// sql to delete a record
		$sql = "DELETE FROM list WHERE Firstname='$id'";
		$sql2 = "DELETE FROM education WHERE TIN='$id1'";
		$sql3 = "DELETE FROM scholarship WHERE TIN='$id1'";

		if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)) {
			header("Location: Lab01_Display.php");
		} else {
			echo "Error deleting record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
?>