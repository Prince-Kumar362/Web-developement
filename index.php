<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Class Managemant System</title>
    <link rel="stylesheet" href="index.css">
    <style>
    
    </style>
</head>

<body>
    <div id="up">
        <a href="index.php" class="active">Home</a>
        <a href="about.php">About us</a>
        <a href="contact.php">Contact us</a>
        <a href="adminlogin.php">Admin Login</a>
        <a href="studentlogin.php">Student Login</a>
        <a href="Teacherlogin.php">Teacher Login</a> 
    </div>
    <div class="home">
        <div><br>
            <marquee>
                <h1 class="mar"><b>Online class Managemant System<b>
</h1>
            </marquee><br>
            <div class="inner1">

            </div>
            <div class="inner2">
                <fieldset>
                    <h3>Student Form</h3> 
                    <form action="NewStudentRegister.php" method="post">
                        <table>
                            <tr>
                                <td> <input type="text" placeholder="Name" name="name" required></td>
                            </tr>
                            <tr>
                                <td><input type="email" placeholder="Email" name="email" required></td>
                            </tr>
                            <tr>
                                <td><input type="password" placeholder="Password" name="password" required></td>
                            </tr>
                            <tr>
                                <td> <input type="number" placeholder="Mobile" name="mobile" required></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="Branch like CSE ME ECE " name="branch" required ></td>
                                <!-- <td> <textarea rows="3" cols="30" placeholder="Address"></textarea></td> -->
                            </tr>
                        </table>
                        <input type="submit" value="Register" name="register" id="button">
                    </form>
                </fieldset> 
            
            </div>
        </div>
    </div>





    <div>
        <center>
            <h1>CONTACT US</h1>
            <p>Send ut perspiciatis undo omnis iste natus error sit voluptatem accusantium doloremque</p>
            <div style=" width:100%;">
                <div style=" width:33%; float:left">
                    <img class="image" src="image/address.jpg">
                    <h2>ADDRESS</H2>
                    <P>
                    <address>Begusarai,Bihar 851127 India</address>
                    </p>
                </div>

                <div style=" width:33%; float:left">
                    <img class="image" src="image/call.jpg">
                    <H2>PHONE NUMBER</H2>
                    <p>+91 6299794492</p>
                </div>
                <div style=" width:33%; float:left">
                    <img class="image" src="image/email.png">
                    <H2>EMAIL</H2>
                    <p>princeppn2002@gmail.com</p>
                </div>
        </center>
    </div>
    <input type="text" placeholder="Your Name" style="width:30%">
    <input type="email" placeholder="Your Email" style="width:30%"><br>
    <input type="text" placeholder="Subject" style="width:61%"><br>
    <textarea rows="3" cols="30" placeholder="Message" style="width:61%"></textarea><br>
    <input type="submit" value="Send Message" id="button1">
    </div>












    <div class="last">
        <div style=" width:30%; float:left">
            <h2>Online Class</h2>
            <p class="text1">
                Connect with Online Classes in an efficient and transparent manner.<br>

                Online Classes is an online platform for managing data associated with its tutoring classes in the most
                efficient and transparent manner. It is a user-friendly software with amazing features like online
                attendance, fees management, homework submission, detailed performance reports and much more- a perfect
                on- the- go solution for parents to know about their wards’ class details. It’s a great amalgamation of
                simple user interface design and exciting features; greatly loved by students, parents, and tutors.
            </p>

        </div>
        <div style=" width:30%; float:left">
            <h2>USEFUL LINKS</h2>
            <H3 class="h31">
                <a href="index.php" style="color:white;"> > Home</a> <BR>
                <a href="About.php" style="color:white;"> > About Us</a><BR>
                <a href="#" style="color:white;">> Services</a> <br>
                <a href="#" style="color:white;">> Terms of Services</a><br>
                <a href="#" style="color:white;">> Privacy pollicy</a><BR>
            </H3>
        </div>
        <div style=" width:30%; float:left">
            <h2>CONTUCT US</h2>
            <h3 class="h31" style="color:white;">
                Birpur Begusarai <br>
                Bihar 851127 <br>
                India <br>
                Phone:+91 6299794492 <br>
                Email: princeppn2002@gmail.com <br>

            </h3>
        </div>

    </div>
</body>

</html>