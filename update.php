<?php
require('config.php'); // Include the database configuration file

// Prepare the update query using prepared statements to avoid SQL injection
$query = "UPDATE users SET name = ?, email = ?, mobile = ?, address = ? WHERE id = ?";
$stmt = $conn->prepare($query);

// Bind the parameters to the query
$stmt->bind_param("ssssi", $_POST['name'], $_POST['email'], $_POST['mobile'], $_POST['address'], $_SESSION['id']);

// Execute the query
if ($stmt->execute()) {
    echo "<script type='text/javascript'>
            alert('Updated successfully...');
            window.location.href = 'user_dashboard.php';
          </script>";
} else {
    echo "<script type='text/javascript'>
            alert('Update failed...');
            window.location.href = 'edit_profile.php';
          </script>";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

