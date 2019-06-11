<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "practice_login";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		//Check connection
		if ($conn->connect_error) {
			die ("connection failed: " . $conn->connect_error);
		}
		
		// $id = $_POST["id"];
		$fname = $_POST["fname"];
		$lname = $_POST["surname"];
		$email = $_POST["email"];
		$psw = $_POST["psw"];

		
		$sql = "INSERT INTO members (mfname, mlname, memail, mpassword) VALUES ('$fname', '$lname', '$email', '$psw')";
		$result = $conn->query($sql);

		$conn->close();

		echo "<p>Thank you.</p>";
		echo "Your information has been entered and your account has been set up.</p>";
?>
		

		
		