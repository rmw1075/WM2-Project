<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/basic.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/debug.addIndicators.js"></script>
    <title>PyHub</title>
</head>

<body>
    <section id="top">

        <div class="half1">
            <figure class="logo">
                <img id="logoImage" src="./assets/images/logo.png" alt="Logo">
            </figure>

            <div class="center">
                <h1>Welcome to LearnPy!</h1>
                <h2>The best way to learn Python!</h2>
            </div>
        </div>
        <div class="half2">
            <a href="./assets/pages/home.php"><img src="assets/images/coder.gif"></a>
        </div>
    </section>
    <button onclick="topFunction()" id="myBtn" title="Return to top"><img src="assets/images/scroll-top.png"></button>
    <div id="spacer"></div>
    <section id="item1">
        <div class="spacer-s2"></div>
        <div id="trigger1" class="spacer s0"></div>
        <div id="reveal1" class="learn">
            <p>Learn the basics of Python with our easy, yet comprehensive tutorial!</p>
            <a href="./assets/pages/learn.php"><img src="./assets/images/python3.png"></a>
        </div>
    </section>
    <section id="item2">
        <div id="trigger2" class="spacer s0"></div>
        <div class="spacer-s2"></div>
        <div id="reveal2" class="test">
            <p>Feeling smart? Test your knowledge by taking our comprehensive quiz!</p>
            <a href="./assets/pages/quiz.php"><img src="./assets/images/Quiz.png"></a>
        </div>
    </section>
    <section id="item3">
        <div id="trigger3" class="spacer s0"></div>
        <div class="spacer-s2"></div>
        <div id="reveal3" class="ask">
            <p>Stuck on a concept? Get help from our friendly tutors!</p>
            <a href="./assets/pages/home.php"><img src="./assets/images/help.png"></a>
        </div>
    </section>
    <footer>
        Copyright Notice © 2019 Team5 All rights reserved.
    </footer>
    <script>
        var myButton = document.getElementById("myBtn");
        window.onscroll = function() {
            scrollFunction(myButton)
        };
    </script>
    <script>
        var controller = new ScrollMagic.Controller(); // build scene
        new ScrollMagic.Scene({
                triggerElement: "#trigger1",
                triggerHook: 0.9, // show, when scrolled 10% into view
                offset: 50 // move trigger to center of element
            })
            .setClassToggle("#reveal1", "visible") // add class to reveal
            // .addIndicators() // add indicators (requires plugin)
            .addTo(controller);

        new ScrollMagic.Scene({
                triggerElement: "#trigger2",
                triggerHook: 0.9, // show, when scrolled 10% into view
                offset: 50 // move trigger to center of element
            })
            .setClassToggle("#reveal2", "visible") // add class to reveal
            // .addIndicators() // add indicators (requires plugin)
            .addTo(controller);

        new ScrollMagic.Scene({
                triggerElement: "#trigger3",
                triggerHook: 0.9, // show, when scrolled 10% into view
                offset: 50 // move trigger to center of element
            })
            .setClassToggle("#reveal3", "visible") // add class to reveal
            // .addIndicators() // add indicators (requires plugin)
            .addTo(controller);
    </script>

</body>

</html>