<?php
session_start();
    if($_SESSION["name"]){
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"OnlineClass");
	$name = "";
	$email = "";
	$mobile = "";
	$branch = "";
	$query = "select * from student where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$branch = $row['branch']; 
	} 
?>
<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div id="up">
        <a href="Student_data.php" class="active">MyProfile</a>
        <input class="head" type="text" value="<?php echo $_SESSION['name'];?>" disabled>
        <input class="head" type="text" value="<?php echo $_SESSION['email'];?>" disabled>

        <select>
            <option>MyProfile</option>
            <option><a href="view_profile.php">View Profile</a></option>
            <option><a href="edit_profile.php">Edit Profile</a></option>
            <option><a href="change_password.php">Change Password</a></option>
        </select>
        <a href="logout.php">Log Out</a>

    </div>


    <table>
        <tr>
            <th colspan="2">
                <h1>View Part</h1>
            </th>
        </tr>
        <tr>
            <th>Name :</th>
            <td> <input type="text" value="<?php echo $name;?>"  disabled></td>
        </tr>
        <tr>
            <th>Email :</th>
            <td> <input type="text" value="<?php echo $email;?>" disabled></td>
        </tr>
        <tr>
            <th> Mobile : </th>
            <td><input type="text" value="<?php echo $mobile;?>" disabled></td>
        </tr>
        <tr>
            <th> Branch :</th>
            
            <td><input type="text" value="<?php echo $branch;?>" disabled></td>
        </tr>
    </table>
</body>
<?php
}
else{
    header("location:studentlogin.php");
}
?>
</html>