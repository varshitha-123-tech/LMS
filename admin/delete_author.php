<?php
    require("config.php"); // Include the centralized database configuration file

    // Execute delete query
    if (isset($_GET['aid'])) {
        $author_id = $_GET['aid']; // Get author ID from the URL parameter
        $query = "DELETE FROM authors WHERE author_id = $author_id";
        $query_run = mysqli_query($conn, $query); // Use $conn from config.php
    }
?>
<script type="text/javascript">
    alert("Author Deleted successfully...");
    window.location.href = "manage_author.php";
</script>
