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
    <title>Online Class Managemant System</title>
    <link rel="stylesheet" href="profile.css">
    <style>

    </style>  
</head>

<body>
    <div id="up"> 
        <a href="Admin_data.php" class="active">MyProfile</a>
        <input class="head" type="text" value="<?php echo $_SESSION['name'];?>" disabled>
        <input class="head" type="text" value="<?php echo $_SESSION['email'];?>" disabled>

        <select>
            <option>MyProfile</option>
            <a href="Admin_view_profile.php"> <option>View Profile</option></a>
            <option><a href="Admin_edit_profile.php">Edit Profile</a></option>
            <option><a href="Admin_change_password.php">Change Password</a></option>
        </select>
        <a href="logout.php">Log Out</a>
    </div>
    MyProfile
    <a href="Admin_view_profile.php">View Profile</a>
    <a href="Admin_edit_profile.php">Edit Profile</a>
    <a href="Admin_change_password.php">Change Password</a>



    <table style="border:5vh ; color:black">
        <tr>
            <th colspan="3"><center><h1>Online Class Time Table</center></h1></th>
        </tr>
        <tr>
            <th>Branch </th>
            <th>Date</th>
            <th>Time </th>
            <th>Link </th>
            <th>Save</th>
        </tr>
        <tr>
        <form action="Admin_Data_Register.php" method="post"> 
            <td><input type="text" name="branch" required > </td>
            <td><input type="date" name="date" required></td>
            <td><input type="time" name="time" required></td>
            <td><input type="text" name="link" required></td>
            <td><input type="submit" name="Done"></td>
        </form>

        </tr>

    </table>
</body>
<?php
}
else{
    header("location:adminlogin.php");
}
?>
</html>