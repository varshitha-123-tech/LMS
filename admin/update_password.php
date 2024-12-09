<?php
    session_start();
    require("config.php"); // Include the centralized database configuration file

    $password = "";

    # Fetch the current password for the admin
    $query = "SELECT * FROM admins WHERE email = '{$_SESSION['email']}'";
    $query_run = mysqli_query($conn, $query); // Use $conn from config.php
    while ($row = mysqli_fetch_assoc($query_run)) {
        $password = $row['password'];
    }

    # Check if the entered password matches the current password
    if ($password == $_POST['new_password']) {
        $query = "UPDATE admins SET password = '{$_POST['new_password']}' WHERE email = '{$_SESSION['email']}'";
        $query_run = mysqli_query($conn, $query);
        ?>
        <script type="text/javascript">
            alert("Password updated successfully...");
            window.location.href = "admin_dashboard.php";
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Wrong Admin Password...");
            window.location.href = "change_password.php";
        </script>
        <?php
    }
?>

