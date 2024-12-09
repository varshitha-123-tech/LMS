<?php
    require("config.php"); // Include the centralized database configuration file

    // Execute delete query
    if (isset($_GET['bn'])) {
        $book_no = $_GET['bn']; // Get book number from the URL parameter
        $query = "DELETE FROM books WHERE book_no = $book_no";
        $query_run = mysqli_query($conn, $query); // Use $conn from config.php
    }
?>
<script type="text/javascript">
    alert("Book Deleted successfully...");
    window.location.href = "manage_book.php";
</script>
