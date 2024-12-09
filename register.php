<?php
	$connection = mysqli_connect("localhost","id21170968_dev","Ucmo@123$");
	$db = mysqli_select_db($connection,"id21170968_lms");
	// $query = "insert into users values('$_POST[user_id]','$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')";
	$query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfull...You may Login now !!");
	window.location.href = "index.php";
</script>