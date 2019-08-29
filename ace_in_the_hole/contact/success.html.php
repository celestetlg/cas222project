<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Celeste Gu">
    <title>template</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Hairline|Bungee+Inline|Bungee+Outline|Bungee+Shade&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Outline|Heebo:700|Kanit:500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include '../includes/header.inc.html.php'?>
<main>
    <section id="success">
    <h1>Thank you!</h1>
    <p>Our records show you submitted the following:<br>
        <span>Requesting information as:</span> <?php echo htmlspecialchars($roleName, ENT_QUOTES, 'UTF-8'); ?><br>
        <span>Full Name:</span> <?php echo htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8'); ?><br>
        <span>Email:</span> <?php echo htmlspecialchars($emailAdr, ENT_QUOTES, 'UTF-8'); ?><br>
        <span>Comments:</span> <?php echo htmlspecialchars($comments, ENT_QUOTES, 'UTF-8'); ?><br>
    </p>
    </section>
</main>
<?php include '../includes/footer.inc.html.php'?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../js/additional.js"></script>
</body>

</html>