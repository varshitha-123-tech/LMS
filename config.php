<?php
// Database credentials
$host = 'dpg-ctbt6pdumphs73asmdb0-a.oregon-postgres.render.com';
$port = 5432;
$database = 'lms_ujg4';
$username = 'lms_ujg4_user';
$password = 'Bk4RQ1LkiyX3F8pdf0oJ2CCHGpDjvnxP';

try {
    // Create a PostgreSQL database connection
    $dsn = "pgsql:host=$host;port=$port;dbname=$database";
    $connection = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable exceptions for errors
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Fetch results as associative arrays
    ]);

    // Connection successful message (for debugging)
    // echo "Database connection successful!";
} catch (PDOException $e) {
    // Handle connection errors
    die("Database connection failed: " . $e->getMessage());
}
?>

