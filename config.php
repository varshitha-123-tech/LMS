<?php
// Database connection using provided credentials
$host ='bqadpx2zv3iix7vczpo8-mysql.services.clever-cloud.com';
$database ='bqadpx2zv3iix7vczpo8';
$username ='uppbsxliffzcjdrk';
$password ='qCkygqkskoYYpCZiitga';
<<<<<<< HEAD
$port =3306;
=======
$port = 3306;
>>>>>>> 59569695bd7a79c00cfe6f6a8fe38427c4867dc9

// Create connection
$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Uncomment to verify connection details (for debugging only, not for production)
// echo "Connected successfully to the database!";
?>


