<?php
// Database connection details from Clever Cloud environment variables
$host = 'b66teogvuw1zyrmkrumh-mysql.services.clever-cloud.com';
$port = 3306;
$database = 'b66teogvuw1zyrmkrumh';
$username = 'uuw0sr7tr8qpe4ho';
$password = 'vzPXhJMiI6rftjWprU9l';

try {
    // Create a PDO connection
    $connection = new PDO(
        "mysql:host=$host;port=$port;dbname=$database;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable exceptions for errors
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Fetch results as associative arrays
        ]
    );

    // Debug: Uncomment the following line to confirm connection
    // echo "Connected to the MySQL database successfully!";
} catch (PDOException $e) {
    // Handle connection errors
    die("Database connection failed: " . $e->getMessage());
}
?>

