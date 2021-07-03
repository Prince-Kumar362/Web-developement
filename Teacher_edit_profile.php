<?php
session_start();
    if($_SESSION["name"]){
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"OnlineClass");
	$name = "";
	$email = "";
	$mobile = "";
	$address = "";
	$query = "select * from teacher where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$address = $row['address']; 
	}
?>
<!DOCTYPE html> 
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="profile.css">
</head> 

<body>

    <div id="up">
        <a href="teacher_data.php" class="active">MyProfile</a>
        <input class="head" type="text" value="<?php echo $_SESSION['name'];?>" disabled>
        <input class="head" type="text" value="<?php echo $_SESSION['email'];?>" disabled>

        <select>
            <option>MyProfile</option>
            <option><a href="Teacher_view_profile.php">View Profile</a></option>
            <option><a href="Teacher_edit_profile.php">Edit Profile</a></option>
            <option><a href="Teacher_change_password.php">Change Password</a></option>
        </select>
        <a href="logout.php">Log Out</a>
    </div>

    <form action="Teacher_update_login_data.php" method="post">
 
        <table>
            <tr>
                <th colspan="2">
                    <h1>Edit Profile</h1>
                </th>
            </tr>
            <tr>
                <th> Name :</th>
                <td> <input type="text" value="<?php echo $name;?>" name="name"></td>
            </tr>
            <tr>
                <th> Email : </th>
                <td><input type="text"  value="<?php echo $email;?>" name="email"></td>
            </tr>
            <tr>
                <th> Mobile :</th>
                <td> <input type="text"  value="<?php echo $mobile;?>" name="mobile"></td>
            </tr>
            <tr>
                <th>Address :</th>
                <td> <textarea rows="3" cols="40" name="address" ><?php echo $address;?></textarea></td>
            </tr>
            <tr>
                <th><button type="submit" name="update" id="button">Update</button></th>
            </tr>

        </table>
    </form>
</body>
<?php
}
else{
    header("location:teacherlogin.php");
}
?>
</html>