<<?php
    require("config.php"); // Include the centralized database configuration file

    function get_author_count() {
        global $conn; // Use the centralized database connection
        $author_count = 0;
        $query = "SELECT COUNT(*) AS author_count FROM authors";
        $query_run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            $author_count = $row['author_count'];
        }
        return $author_count;
    }

    function get_user_count() {
        global $conn; // Use the centralized database connection
        $user_count = 0;
        $query = "SELECT COUNT(*) AS user_count FROM users";
        $query_run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            $user_count = $row['user_count'];
        }
        return $user_count;
    }

    function get_book_count() {
        global $conn; // Use the centralized database connection
        $book_count = 0;
        $query = "SELECT COUNT(*) AS book_count FROM books";
        $query_run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            $book_count = $row['book_count'];
        }
        return $book_count;
    }

    function get_issue_book_count() {
        global $conn; // Use the centralized database connection
        $issue_book_count = 0;
        $query = "SELECT COUNT(*) AS issue_book_count FROM issued_books";
        $query_run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            $issue_book_count = $row['issue_book_count'];
        }
        return $issue_book_count;
    }

    function get_category_count() {
        global $conn; // Use the centralized database connection
        $cat_count = 0;
        $query = "SELECT COUNT(*) AS cat_count FROM category";
        $query_run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            $cat_count = $row['cat_count'];
        }
        return $cat_count;
    }
?>

?>