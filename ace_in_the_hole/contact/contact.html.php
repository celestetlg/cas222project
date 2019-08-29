<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Celeste Gu">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Hairline|Bungee+Inline|Bungee+Outline|Bungee+Shade&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Outline|Heebo:700|Kanit:500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include '../includes/header.inc.html.php'?>
<main  style="background-color: rgba(229,229,229, 0.9)">
    <section id="form_section">
        <h1>Request for Information Form</h1><br>
        <form method="post" action="" id="contactForm">
            <p><span class="number">1</span>   Requesting information as:</p>
            <label class="containerRadio">Athlete
                <input type="radio" name="role" id="role" value="Athlete">
                <span class="circle"></span>
            </label>
            <label class="containerRadio">Volunteer
                <input type="radio" name="role" id="role" value="Volunteer">
                <span class="circle"></span>
            </label>
            <label class="containerRadio">Interested Party
                <input type="radio" name="role" id="role" value="Interested Party">
                <span class="circle"></span>
            </label>
            <label for="name"><span class="number">2</span> Full Name
                <input type="text" placeholder="Please enter your full name" name="rName" id="rName" required>
            </label>
            <label for="email"><span class="number">3</span> Email
                <input type="email" placeholder="Please enter your Email" name="rEmail" id="rEmail" required>
            </label>
            <label for="content"><span class="number">4</span>Any Question or Comment?</label>
            <textarea name="content" id="content"  form="contactForm" cols="33"></textarea>
            <button type="submit" class="submitBtn" name="submit" value="submit">Submit</button>
        </form>
    </section>
</main>
<?php include '../includes/footer.inc.html.php'?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../js/additional.js"></script>
</body>

</html>