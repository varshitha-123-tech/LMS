<?php
session_start();
require('config.php'); // Include database connection configuration

// Initialize variables
$password = "";

// Fetch the current password from the database
$query = "SELECT password FROM users WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $_SESSION['email']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $password = $row['password'];
}

// Check if the current password matches
if ($password === $_POST['old_password']) {
    // Update the password in the database
    $query = "UPDATE users SET password = ? WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $_POST['new_password'], $_SESSION['email']);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script type='text/javascript'>
                alert('Password updated successfully...');
                window.location.href = 'user_dashboard.php';
              </script>";
    } else {
        echo "<script type='text/javascript'>
                alert('Failed to update password...');
                window.location.href = 'change_password.php';
              </script>";
    }
} else {
    echo "<script type='text/javascript'>
            alert('Incorrect current password...');
            window.location.href = 'change_password.php';
          </script>";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

