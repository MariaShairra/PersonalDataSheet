<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$id = $_POST['id'];
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

		if (mysqli_query($conn, $sql)) {
			header("Location: Lab01_Display.php");
		} else {
			echo "Error deleting record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
?>