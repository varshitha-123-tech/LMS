<?php
    require("config.php"); // Include the centralized database configuration file

    // Execute delete query
    if (isset($_GET['cid'])) {
        $cat_id = $_GET['cid']; // Get the category ID from the URL parameter
        $query = "DELETE FROM category WHERE cat_id = $cat_id";
        $query_run = mysqli_query($conn, $query); // Use $conn from config.php
    }
?>
<script type="text/javascript">
    alert("Category Deleted successfully...");
    window.location.href = "manage_cat.php";
</script>
