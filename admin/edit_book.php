<?php 
	session_start();
    require("config.php"); // Include the centralized database configuration file

    # Fetch data from the database
    $book_name = "";
    $book_no = "";
    $author_id = "";
    $cat_id = "";
    $book_price = "";

    if (isset($_GET['bn'])) {
        $book_no = $_GET['bn']; // Get book number from URL
        $query = "SELECT * FROM books WHERE book_no = $book_no";
        $query_run = mysqli_query($conn, $query); // Use $conn from config.php
        while ($row = mysqli_fetch_assoc($query_run)) {
            $book_name = $row['book_name'];
            $book_no = $row['book_no'];
            $author_id = $row['author_id'];
            $cat_id = $row['cat_id'];
            $book_price = $row['book_price'];
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Book</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name']; ?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email']; ?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="#">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>This is library management system. Library opens at 8:00 AM and closes at 8:00 PM</marquee></span><br><br>
		<center><h4>Edit Book</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="mobile">Book Number:</label>
						<input type="text" name="book_no" value="<?php echo $book_no; ?>" class="form-control" disabled required>
					</div>
					<div class="form-group">
						<label for="email">Book Name:</label>
						<input type="text" name="book_name" value="<?php echo $book_name; ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Author ID:</label>
						<input type="text" name="author_id" value="<?php echo $author_id; ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Category ID:</label>
						<input type="text" name="cat_id" value="<?php echo $cat_id; ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Book Price:</label>
						<input type="text" name="book_price" value="<?php echo $book_price; ?>" class="form-control" required>
					</div>
					<button type="submit" name="update" class="btn btn-primary">Update Book</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
<?php
	if (isset($_POST['update'])) {
        if (isset($_GET['bn'])) {
            $book_no = $_GET['bn']; // Get book number from URL
            $book_name = $_POST['book_name'];
            $author_id = $_POST['author_id'];
            $cat_id = $_POST['cat_id'];
            $book_price = $_POST['book_price'];

            $query = "UPDATE books SET book_name = '$book_name', author_id = $author_id, cat_id = $cat_id, book_price = $book_price WHERE book_no = $book_no";
            $query_run = mysqli_query($conn, $query); // Use $conn from config.php
            header("location:manage_book.php");
        }
	}
?>
