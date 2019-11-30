<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title><?php echo $page; ?></title>
        <link rel="stylesheet" type="text/css" href="../css/template.css" />
        <link rel="stylesheet" type="text/css" href="../css/swipe css.css" />
	    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	    <script  src="../js/swipeslideshow1.js"></script>
        <script  src="../js/autoslideshow1.js"></script>
    </head>

    
    <body>
<div class="content">
<div id="header">
    
    <div id="leftLinks">
        <a href="../pages/learn.php" id="learn">Learn</a>
        |
        <?php
        if ((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"] == true)) {
            if (strcmp($_SESSION["role"], "Student") == 0){
                echo "<a href=\"../pages/quiz.php\" id=\"quiz\">Quiz</a>|";
            }
            if ($_SESSION["survey"] == false) {
                echo "<a href=\"../pages/survey.php\" id=\"survey\">Survey</a>|";
            }
        }
        ?>
        <a href="../pages/blog.php" id="blog">Blog</a>
        |
        <a href="../pages/about.php" id="about">About Us</a>
    </div><!-- End of leftLinks -->

    <div id="rightLinks">
        <?php
        if (isset($_SESSION["loggedin"]) && ($_SESSION["loggedin"] == true)) {
            echo "Hi " . $_SESSION["name"] . "! |";
            if (strcmp($_SESSION["role"], "Instructor") == 0){
                echo "<a href=\"../php/instructor.php\">View Scores</a>|";
            } else {
								if($_SESSION["quiz"] == true) {
                	echo "<a href=\"../php/results.php\">View Your Scores</a>|";
                }
            }
            echo "<a href=\"../php/logout.php\">Logout</a>";
        } else {
            echo"<a href=\"../php/login.php\">Login</a>";
        }
        ?>
    </div><!-- End of rightLinks -->
</div><!-- End of header -->

<div id="header2">
    <a href="../pages/home.php" id="logo">
        <img id="desktop" src="../images/black_h_lpy.png" alt="Logo">
        <img id="mobile" src="../images/black_v_lpy.png" alt="Logo">
    </a>
    <div id="h2Links">
        <a href="../pages/loops.php" id="loops">Loops</a>
        |
        <a href="../pages/data.php" id="data">Data</a>
        |
        <a href="../pages/syntax.php" id="syntax">Syntax</a>
    </div><!-- End of h2Links -->
</div><!-- End of header2 -->
<div id="content">
