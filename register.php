<?php
	require("config.php"); // Include the centralized database configuration file

	// Insert user data into the database
	$query = "INSERT INTO users VALUES (NULL, '$_POST[name]', '$_POST[email]', '$_POST[password]', '$_POST[mobile]', '$_POST[address]')";
	$query_run = mysqli_query($connection, $query);
?>

<script type="text/javascript">
	alert("Registration successful...You may login now!!");
	window.location.href = "index.php";
</script>
