<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Celeste Gu">
    <title>Home</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Hairline|Bungee+Inline|Bungee+Outline|Bungee+Shade&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Outline|Heebo:700|Kanit:500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include 'includes/header.inc.html.php'?>
<main>
    <section id="imageGallery">
        <div class="largeScreen" style="max-width:100%;"  >
            <img class="automySlides" src="image/slide1.jpg">
            <img class="automySlides" src="image/slide2.jpg">
            <img class="automySlides" src="image/slide3.jpg">
            <img class="automySlides" src="image/slide4.jpg">
            <img class="automySlides" src="image/slide5.jpg">
            <img class="automySlides" src="image/slide6.jpg">
        </div>
        <div class="smallScreen">
            <img src="image/event_intro.jpg" style="max-width: 100%; object-fit: contain">
        </div>
    </section>
    <section id="section1">
        <div class="tab container">
        <div class="tab">
            <button class="tablink" onclick="openPage('Event', this, 'white')">About Event</button>
            <button class="tablink" onclick="openPage('About', this, 'white')" id="defaultOpen">About Us</button>
            <button class="tablink" onclick="openPage('Schedule', this, 'white')">Schedule</button>
            <button class="tablink" onclick="openPage('Weather', this, 'white')">Weather Forecast</button>
        </div>

        <!-- Tab content -->
        <div id="Event" class="tabcontent">
            <h3>Ace in the Hole Multisport Events</h3>
            <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running
                community. It has become a traditional destination race for athletes from across the nation.

                There is something for every level of athletic ability. The weekend includes a first timer triathlon,
                a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your
                first race or come to compete to win, but make sure you come to have fun!</p>
            <p>For each event detail including course detail, cost and what to bring, please check out the <a href="events/events.html.php">Event Page</a>!</p>
        </div>

        <div id="About" class="tabcontent">
            <h3>About Us</h3>
            <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to
                athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds.
                We offer Events for Every Body.</p>
        </div>

        <div id="Schedule" class="tabcontent">
            <h3>Saturday, September 7th 2019</h3>
            <ul>
                <li>&nbsp;7:00 AM Long Course Triathlon</li>
                <li>&nbsp;7:30 AM Olympic Triathlon</li>
                <li>&nbsp;7:15 AM 10K</li>
                <li>&nbsp;7:15 AM Half Marathon</li>
            </ul>
            <h3>Sunday, September 8th 2019</h3>
            <ul>
                <li>&nbsp;8:00 AM Sprint Triathlon</li>
                <li>&nbsp;8:20 AM Try-a-Tri</li>
                <li>12:00 PM Splash n Dash</li>
            </ul>
        </div>
        <div id="Weather" class="tabcontent">
            <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="pure" >PORTLAND WEATHER</a>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
        </div>
        </div>
    </section>
    <div class="section group">
        <section id="section3" class="col span_6_of_12">
                <a class="twitter-timeline" data-height="400" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </section>
        <section id="section2" class="col span_6_of_12">
            <iframe src='https://www.sociablekit.com/app/embed/index.php?embed_id=27912' frameborder='0' width='100%' height='400'></iframe>
        </section>

    </div>
</main>
<?php include 'includes/footer.inc.html.php'?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/additional.js"></script>
</body>

</html>