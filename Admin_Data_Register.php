<?php
session_start();

	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"OnlineClass");
	$query = "insert into link values('$_POST[branch]','$_POST[date]','$_POST[time]','$_POST[link]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Link uplode successfully....You may share other link now.")
	window.loction.href = "Admin_data.php";
</script> 