<?php
session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"OnlineClass");
					$query = "select * from teacher  where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					$row = mysqli_fetch_assoc($query_run);
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								//$_SESSION['roll'] = $row['roll'];
								header("Location:Teacher_data.php");
							}
							else{
								?>
								<script type="text/javascript">
									alert("Wrong Password");
									window.location.href = "teacherlogin.php";
								</script>


								<?php

							}
							//header("Location:teacherlogin.php");
						}
						else{
							header("Location:teacherlogin.php");
						}
					
				}
			?>