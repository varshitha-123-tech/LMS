<<?php
    require("config.php"); // Include the centralized database configuration file

    // Initialize user count
    $user_count = 0;

    // Fetch the count of users
    $query = "SELECT COUNT(*) AS user_count FROM users";
    $query_run = mysqli_query($conn, $query); // Use $conn from config.php

    if ($query_run) {
        $row = mysqli_fetch_assoc($query_run); // Fetch the single result row
        $user_count = $row['user_count'];
    } else {
        // Handle query failure (optional for debugging, not for production)
        die("Query failed: " . mysqli_error($conn));
    }

    // Output user count (for testing purposes)
    // echo "Total Users: " . $user_count;
?>
