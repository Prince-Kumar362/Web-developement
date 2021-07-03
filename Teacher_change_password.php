<?php
	session_start();
    if($_SESSION["name"]){
?>
<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change password</title>
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


    <form action="Teacher_update_password.php" method="post">

        <table>
            <tr>
                <th colspan="2">
                    <h1>Change Password</h1>
                </th>
            </tr>
            <tr>
                <th> Enter Current Password:</th>
                <td><input type="text" name="old_password" placeholder="Current Password"></td>
            </tr>
            <tr>
                <th> Enter New Password: </th>
                <td><input type="password" name="new_password" placeholder="New Password"></td>
            </tr>
            <tr>
                <th> <button type="submit" name="update" id="button">Update Password</button> </th>
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