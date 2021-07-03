<?php

	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"OnlineClass");
	$query = "update student set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]',branch='$_POST[branch]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "student_data.php";
</script>  