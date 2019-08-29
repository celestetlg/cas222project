<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Celeste Gu">
    <title>FAQ</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/event.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Hairline|Bungee+Inline|Bungee+Outline|Bungee+Shade&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Outline|Heebo:700|Kanit:500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include '../includes/header.inc.html.php'?>
<main >
    <section id="imageGallery">
        <div class="largeScreen" style="max-width:100%" >
            <img class="automySlides" src="../image/slide1.jpg">
            <img class="automySlides" src="../image/slide2.jpg">
            <img class="automySlides" src="../image/slide3.jpg">
            <img class="automySlides" src="../image/slide4.jpg">
            <img class="automySlides" src="../image/slide5.jpg">
            <img class="automySlides" src="../image/slide6.jpg">
        </div>
        <div class="smallScreen">
            <img src="../image/event_intro.jpg" style="max-width: 100%; object-fit: cover">
        </div>
    </section>
    <h2>Frequently Asked Questions</h2>
    <section id="questionSection">
            <button class="collapsible">What are the rules?</button>
            <div class="content">
                <ul>
                    <li>We currently adhere to the USAT Rules for Triathlon & Duathlon.</li>
                    <li>Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</li>
                </ul>
            </div>
            <button class="collapsible">Can I use a personal music device while cycling?</button>
            <div class="content">
                <ul>
                    <li>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</li>
                </ul>
            </div>
        <button class="collapsible">Can I use a personal music device while running?</button>
        <div class="content">
            <ul>
                <li>We currently adhere to the USAT Rules for Triathlon & Duathlon.During any running segments,
                    we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive
                    environment and assure athletes can hear all course marshal instructions.</li>
                <li>With that said, we also
                    understand that many athletes rely on music to help endure the challenge of running.
                    To accommodate the needs of our athletes while still assuring maximum safety and a fair,
                    competitive environment, here is the arrangement that we can accommodate.
                <ul>
                    <li>If you chose to use a personal music device, you must always keep one ear open for
                        instructions so only one ear-bud can be used at any time.
                        </li>
                    <li>In addition, if you opt to use music, you will not be eligible for awards, points and rankings.
                        So as an athlete, you have to make a choice music or awards/points/rankings.</li>
                    <li>If you are using a personal music devise with two earbuds, you will be immediately disqualified.
                        Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</li>
                    <li>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</li>
                </ul>
                </li>
            </ul>
        </div>
        <button class="collapsible">Do I need to wear a wetsuit?</button>
        <div class="content">
            <ul>
                <li>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor. </li>
            </ul>
        </div>
        <button class="collapsible">Do I have to use a road or racing bike?</button>
        <div class="content">
            <ul>
                <li>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.
                </li>
            </ul>
        </div>
        <a href="../contact/">If you have more questions, contact us!</a>
    </section>
    <div>
    </div>

</main>
<?php include '../includes/footer.inc.html.php'?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../js/additional.js"></script>
<script src="../js/collapsibles.js"></script>
</body>

</html>