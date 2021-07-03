<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <style>
    * {
        text-align: center;
        align-items: center;

    }

    .image {
        width: 15vw;
        height: 20vh;
    }

    .image1 {
        width: 33%;
        float: left"

    }
    h1,h2{
        color:aqua;
    }

    #button {
        width: 10vw;
        height: 5vh;
        border-radius: 3vh;
        background-color: aqua;
        /* background: linear-gradient(aqua, purple); */

    }
    </style>
</head>

<body>
    <div>
        <center>
            <h1>CONTACT US</h1>
            <p>Send ut perspiciatis undo omnis iste natus error sit voluptatem accusantium doloremque</p>
            <div style=" width:100%;">
                <div style=" width:33%; float:left">
                    <img class="image" src="image/address.jpg">
                    <h2>ADDRESS</H2>
                    <P><address>Begusarai,Bihar 851127 India</address></p>
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
    <input type="submit" value="Send Message" id="button">
    </div>
</body>

</html>