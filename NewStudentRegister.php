<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"OnlineClass");
	$query = "insert into student values(null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile]','$_POST[branch]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "studentlogin.php";
</script> 