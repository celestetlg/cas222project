<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Celeste Gu">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Hairline|Bungee+Inline|Bungee+Outline|Bungee+Shade&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Outline|Heebo:700|Kanit:500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: rgba(229,229,229, 0.9)">
<?php include '../includes/header.inc.html.php'?>
<main>
    <section id="form_section">
        <h1>Registration Form</h1><br>
        <form method="post" action="" id="registerForm">
            <fieldset>
                <legend><span class="number">1</span>Personal Information </legend>
            <p>Registering as:</p>
            <label class="containerRadio">Athlete
                <input type="radio" name="role" id="role" value="Athlete">
                <span class="circle"></span>
            </label>
            <label class="containerRadio">Volunteer
                <input type="radio" name="role" id="role" value="Volunteer">
                <span class="circle"></span>
            </label>
            <label for="name"> Full Name
                <input type="text" placeholder="Please enter your full name" name="rName" id="rName" required>
            </label>

            <label for="age"> Age
                <input type="text" placeholder="Please tell us your age" name="rAge" id="rAge" required>
            </label>

            <label for="email">Email
                <input type="email" placeholder="Please enter your Email" name="rEmail" id="rEmail" required>
            </label>

                <label for="contactName"> Emergency Contact Name
                    <input type="text" id="rEName" placeholder="Name of emergency contact" name="rEName" required>
                </label>

            <label for="contactNum"> Emergency Contact Number
                <input type="text" id="rPhone" placeholder="Phone number of emergency contact" name="rPhone" required>
            </label>
            <p> Gender</p>
            <label class="containerRadio">Male
                <input type="radio" name="gender" id="gender" value="Male">
                <span class="circle"></span>
            </label>
            <label class="containerRadio">Female
                <input type="radio" name="gender" id="gender" value="Female">
                <span class="circle"></span>
            </label>
            <label class="containerRadio">Non-binary
                <input type="radio" name="gender" id="gender" value="Non-binary">
                <span class="circle"></span>
            </label>
            </fieldset>
            <fieldset>
                <legend><span class="number">2</span>Events(can only register for one event per day)</legend>
                <p>Saturday</p>
                <label class="containerRadio">Long Course Triathlon
                    <input type="radio" name="satEvent" id="satEvent" value="Long Course Triathlon">
                    <span class="circle"></span>
                </label>
                <label class="containerRadio">Olympic Triathlon
                    <input type="radio" name="satEvent" id="satEvent" value="Olympic Triathlon">
                    <span class="circle"></span>
                </label>
                <label class="containerRadio">10K
                    <input type="radio" name="satEvent" id="satEvent" value="10K">
                    <span class="circle"></span>
                </label>
                <label class="containerRadio">Half Marathon
                    <input type="radio" name="satEvent" id="satEvent" value="Half Marathon">
                    <span class="circle"></span>
                </label>
                <p>Sunday</p>
                <label class="containerRadio">Sprint Triathlon
                    <input type="radio" name="sunEvent" id="sunEvent" value="Sprint">
                    <span class="circle"></span>
                </label>
                <label class="containerRadio">Try-a-Tri
                    <input type="radio" name="sunEvent" id="sunEvent" value="Try-a-Tri">
                    <span class="circle"></span>
                </label>
                <label class="containerRadio">Splash n Dash

                    <input type="radio" name="sunEvent" id="sunEvent" value="Splash-n-Dash">
                    <span class="circle"></span>
                </label>
            </fieldset>
            <fieldset>
                <legend><span class="number">3</span><label for="content">Any Special Accommodations</label></legend>
            <textarea name="content" id="content" form="registerForm" cols="33"></textarea>
            </fieldset>
            <button type="submit" class="submitBtn" name="submit" id="submit" value="submit">Register</button>
        </form>
    </section>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</main>
<?php include '../includes/footer.inc.html.php'?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../js/additional.js"></script>
<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }

</script>
</body>

</html>