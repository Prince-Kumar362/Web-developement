<html>

<head>
    <style>
    body {
        background-color: aquamarine;
    }

    .t1 {
        align-content: center;

        margin-left: 35vw;
    }

    .formerror {
        color: red;
    }

    #button {
        width: 10vw;
        height: 5vh;
        border-radius: 3vh;
        background-color: aqua;
    }

    fieldset {
        width: 350px;
        align-content: center;
        background-color: grey;
        border-radius: 3vh;
    }
    </style>
    <script>
    function clearErrors() {
        errors = document.getElementsByClassName('formerror');
        for (let item of errors) {
            item.innerHTML = "";
        }
    }

    function seterror(id, error) {
        element = document.getElementById(id);
        element.getElementsByClassName('formerror')[0].innerHTML = error;
    }

    function validateForm() {
        var returnval = true;
        clearErrors();
        var email = document.forms['myForm']["femail"].value;
        if (email.length == 0) {
            seterror("email", "* Email is too sort");
            returnval = false;
        }
        if (email.length > 25) {
            seterror("email", "* Email is too sort");
            returnval = false;
        }
        return returnval;
    }
    </script>
</head>

<body>
    <div class="t1">
        <fieldset>
            <form action="/myaction.php" name="myForm" onsubmit="return validateForm()" method="post">
                <div id="email">
                    Email : <input type="email" placeholder="xyz@gmail.com" name="femail"><span
                        class="formerror"></span>
                    <br><br>
                </div>
                <input type="submit" id="button" value="Send">
            </form>
        </fieldset>
    </div>
</body>

</html>