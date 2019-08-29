<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Celeste Gu">
    <title>Events</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/event.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Hairline|Bungee+Inline|Bungee+Outline|Bungee+Shade&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Outline|Heebo:700|Kanit:500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php include '../includes/header.inc.html.php'?>
<main>
    <section id="imageGallery">
        <div class="largeScreen" style="max-width:100%;"  >
            <img class="automySlides" src="../image/slide1.jpg">
            <img class="automySlides" src="../image/slide2.jpg">
            <img class="automySlides" src="../image/slide3.jpg">
            <img class="automySlides" src="../image/slide4.jpg">
            <img class="automySlides" src="../image/slide5.jpg">
            <img class="automySlides" src="../image/slide6.jpg">
        </div>
        <div class="smallScreen">
            <img src="../image/event_intro.jpg" style="max-width: 100%; object-fit: contain">
        </div>
    </section>
    <section id="section1">
        <div class="tab container">
            <div class="tab">
                <button class="tablink" onclick="openPage('packet', this, 'white')" >Packet Pickup</button>
                <button class="tablink" onclick="openPage('satEvent', this, 'white')" id="defaultOpen">Saturday Events</button>
                <button class="tablink" onclick="openPage('sunEvent', this, 'white')">Sunday Events</button>
                <button class="tablink" onclick="openPage('precautions', this, 'white')">Precautions</button>
            </div>
            <!-- Tab content -->
            <div id="packet" class="tabcontent">
                <h3>PACKET PICK UP</h3>
                <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. <br>Packet
                    pick up hours: <br>Thursday 8-5, Friday 9-noon. <br>No day of event packet pick up. </p>
            </div>
            <div id="satEvent" class="tabcontent">
                <h3>Course Details for Saturday Events</h3>
                <div class="group section">
                    <div class="col span_6_of_12" id="sidePic">
                        <img src="../image/running_detail.jpg">
                    </div>
                    <div class="col span_6_of_12" id="sideInfo">
                <button class="collapsible">Long Course Triathlon</button>
                    <div class="content">
                    <ul>
                        <li><span>SWIM 1.2 miles</span>  - Participants will make two counter-clockwise loops. Large buoys will mark the turn points.
                            Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</li>
                        <li><span>Bike 58 miles</span> - A scenic point-to-point course that travels over gently rolling hills
                            prior to three hard climbs. The bike course will be marked with large directional signage and
                            there will be course marshals at key intersections to help direct you.</li>
                        <li><span>Run 13.1 miles</span> - A mostly flat loop course on widely paved bike paths that traverse
                            through and around this beautiful and scenic destination resort (two hills total with a minimal
                            elevation gain).</li>
                    </ul>
                </div>
                <button class="collapsible">Olympic Triathlon</button>
                <div class="content">
                    <ul>
                    <li><span>SWIM 1,500 meters</span>  - Participants will make two counter-clockwise loops.
                        Large buoys will mark the turn points. Kayakers will be positioned on the water to support
                        the swimmers. Medical support will be present on the beach.</li>
                    <li><span>Bike 28 Miles</span> - A scenic point-to-point course that travels over gently rolling
                        hills. The bike course will be marked with large directional signage and course marshals will
                        be present at key intersections.</li>
                    <li><span>Run 10K</span> - A mostly flat loop course on widely paved bike paths that traverse through
                        and around this beautiful and scenic destination resort (one hill total with a minimal elevation
                        gain).</li>
                    </ul>
                </div>
                <button class="collapsible">10K Course</button>
                <div class="content">
                    <ul>
                    <li>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide,
                        perfectly paved and wind around through the forest. Each course has only two small hills with a
                        minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of
                        the crowd.</li>
                    </ul>
                </div>
                <button class="collapsible">Half Marathon</button>
                <div class="content">
                    <ul>
                    <li><span>13.1 miles</span> - Half-Marathon event starts and finishes in the Athletes Village to
                        the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line
                        festivities, including the Sports & Fitness Expo and live entertainment.
                        Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will
                        begin once the results have been certified</li>
                    </ul>
                </div>
                        <button id="signUp" title="Register"><a href="../registration/">Register</a></button>
                    </div>
                </div>
            </div>
            <div id="sunEvent" class="tabcontent">
                <h3>Course Details for Sunday Events</h3>
                <div class="group section">
                    <div class="col span_6_of_12" id="sidePic">
                        <img src="../image/swim_backup2.jpg">
                    </div>
                    <div class="col span_6_of_12" id="sideInfo">

                <button class="collapsible">Sprint Triathlon</button>
                <div class="content">
                    <p>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic
                        distance and a 5km run.</p>
                </div>
                <button class="collapsible">Try-a-Tri</button>
                <div class="content">
                    <ul>
                        <li>This novice race is designed for the first time triathlete, those new to the sport, our Junior
                            Triathletes.</li>
                        <li>The swim is a shorter, more manageable 1/4 mile distance,
                            (instead of the standard 1/2-mile Sprint distance swim)</li>
                        <li>A 10 mile bike ride
                            (vs 12 miles and it's a 2 loop course making it very spectator friendly!)</li>
                        <li>A flat 2 mile run
                            (vs 3 mile sprint course)</li>
                    </ul>
                </div>
                <button class="collapsible">Splash n' Dash</button>
                <div class="content">
                    <ul>
                        <li>Kids event for participants ages 4 to 15.</li>
                        <li>This is a 100 yard swim and a 50 yard dash.</li>
                        <li>It is free if an adult registers for an event otherwise it is $25.</li>
                    </ul>
                </div>
                        <button id="signUp" title="Register"><a href="../registration/">Register</a></button>
            </div>
                </div>
            </div>
            <div id="precautions" class="tabcontent">
                <h3>What to Bring</h3>
                <button class="collapsible">Weather</button>
                <div class="content">
                    <ul>
                        <li>Watch the weather closely.</li>
                        <li>The show goes on no matter what the weather is doing.</li>
                    </ul>
                </div>
                <button class="collapsible">Chip Timing Piece</button>
                <div class="content">
                    <ul>
                        <li>You must wear your chip timing piece during the entire event. </li>
                        <li>You will be given a band that will hold your chip timing piece around your ankle throughout the
                            entire event. Be sure that it is snapped tightly. </li>
                        <li>Be sure to have your Chip Timing piece on before you start the race and be sure to step over
                            the timing mats after each segment of the race.</li>
                        <li>If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise,
                            you will have a very difficult time getting off your wet suit.</li>
                    </ul>
                </div>
                <button class="collapsible">Swimming Event</button>
                <div class="content">
                    <ul>
                        <li>Wet suits are optional for the swim but will provide buoyancy and warmth.</li>
                        <li>However, many people opt for no wetsuit for a triathlon so no worries. </li>
                        <li>We will provide you with a swim cap but you will want to bring your own goggles.</li>
                    </ul>
                </div>
                <button class="collapsible">Biking Event</button>
                <div class="content">
                    <ul>
                        <li>A biking helmet is mandatory.</li>
                        <li>You will also receive 2 stickers in your package with your race number on them.</li>
                        <li>The small sticker should go on the front of your helmet.</li>
                        <li>The bigger sticker will wrap around your bike frame.</li>
                        <li>Road or mountain bikes are acceptable.</li>
                        <li>For safety reasons, be sure to have end-caps on the end of your handle-bars.</li>
                    </ul>
                </div>
                <button class="collapsible">Running Event</button>
                <div class="content">
                    <ul>
                        <li>You must finish the race with your bib number on the front of you.</li>
                        <li>Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it.</li>
                        <li>Others pin it on a singlet that they put on once they finish the swim before they head out for the bike.</li>
                        <li>Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.</li>
                        <li>Use whatever option feels best for you.</li>
                    </ul>
                </div>
                <p>Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>
            </div>
        </div>
    </section>
    <div class="section group" id="equalHeight">
        <section id="cost" class="col span_6_of_12">
            <h3>Cost for Each Event</h3>
            <ul>
                <li>Long Course Triathlon - <span>$240</span></li>
                <li>Olympic Triathlon- <span>$110</span></li>
                <li>10K- <span>$50</span></li>
                <li>Half Marathon- <span>$75</span></li>
                <li>Sprint Triathlon- <span>$90</span></li>
                <li>Try-a-Tri- <span>$65</span></li>
                <li>Splash n Dash- <span>FREE or $25</span></li>
            </ul>
        </section>
        <section id="coverage" class="col span_6_of_12">
            <h3>Cost coverage</h3>
            <ul>
                <li>Food & Beer</li>
                <li>Access to the weekend live entertainment & Fitness Expo</li>
                <li>Commemorative Finisher medal</li>
                <li>Accurate Chip Timing for competitive races</li>
                <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                <li>Post-event party & entertainment</li>
                <p>NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
            </ul>
        </section>
    </div>
</main>
<?php include '../includes/footer.inc.html.php'?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.menu').click(function() {
            $('ul').toggleClass('active');
        });

    });

    /*automatic slide*/

    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("automySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 5000); // Change image every 2 seconds
    }


</script>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var p;
    for (p = 0; p < coll.length; p++) {
        coll[p].addEventListener("click", function() {
            this.classList.toggle("active1");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>
<script>
    /* tab */
    function openPage(pageName, elmnt, color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
    }
    document.getElementById("defaultOpen").click();
</script>

</body>

</html>