<?php
session_start();

	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"OnlineClass");
	$query = "update admin set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]',address='$_POST[address]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "Admin_data.php";  
</script>   