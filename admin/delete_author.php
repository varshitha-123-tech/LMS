<?php
	$connection = mysqli_connect("localhost","id21170968_dev","Ucmo@123$");
	$db = mysqli_select_db($connection,"id21170968_lms");
	$query = "delete from authors where author_id = $_GET[aid]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Author Deleted successfully...");
	window.location.href = "manage_author.php";
</script>