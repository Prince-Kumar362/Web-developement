<?php
session_start();
if($_SESSION["name"]){
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"OnlineClass");
    $query = "select * from link";
	$query_run = mysqli_query($connection,$query);
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
    MyProfile
    <a href="Teacher_view_profile.php">View Profile</a>
    <a href="Teacher_edit_profile.php">Edit Profile</a>
    <a href="Teacher_change_password.php">Change Password</a>



    <table style="border:5vh ; color:black">
        <tr>
            <th colspan="3"><h1>Online Class Time Table</h1></th>
        </tr>
        <tr>
            <th>Branch </th>
            <th>Date</th>
            <th>Time </th>
            <th>Link </th> 
        </tr>
        <?php      
        while($row = mysqli_fetch_assoc($query_run)){
        echo "<tr><td>".$row["branch"]."</td> <td>".$row['date']."</td><td>".$row["time"]."</td><td>".$row["link"]."</td> </tr>";
        }
        ?>

    </table>
</body>
<?php
}
else{
    header("location:teacherlogin.php");
}
?>
</html>