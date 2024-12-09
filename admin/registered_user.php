<?php
    require("config.php"); // Include the centralized database configuration file

    # Initialize user count
    $user_count = 0;

    # Fetch the count of users
    $query = "SELECT COUNT(*) AS user_count FROM users";
    $query_run = mysqli_query($conn, $query); // Use $conn from config.php
    while ($row = mysqli_fetch_assoc($query_run)) {
        $user_count = $row['user_count'];
    }
?>
