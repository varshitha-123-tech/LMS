<?php
    require("config.php"); // Include the centralized database configuration file

    # Update admin details
    $query = "UPDATE admins SET name = '{$_POST['name']}', email = '{$_POST['email']}', mobile = '{$_POST['mobile']}'";
    $query_run = mysqli_query($conn, $query); // Use $conn from config.php
?>
<script type="text/javascript">
    alert("Updated successfully...");
    window.location.href = "admin_dashboard.php";
</script>
