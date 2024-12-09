<?php
    require("config.php"); // Include the centralized database configuration file

    # Initialize book count
    $book_count = 0;

    # Fetch the count of books
    $query = "SELECT COUNT(*) AS book_count FROM books";
    $query_run = mysqli_query($conn, $query); // Use $conn from config.php
    while ($row = mysqli_fetch_assoc($query_run)) {
        $book_count = $row['book_count'];
    }
?>
