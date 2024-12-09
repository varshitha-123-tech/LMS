<?php
	$connection = mysqli_connect("localhost","id21170968_dev","Ucmo@123$");
	$db = mysqli_select_db($connection,"id21170968_lms");
	$book_count = 0;
	$query = "select count(*) as book_count from books";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$book_count = $row['book_count'];
	}
?>