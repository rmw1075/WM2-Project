<link rel="stylesheet" type="text/css" href="../css/template.css" />
<?php session_start(); ?>
<div id="header">
    <div id="leftLinks">
        <a href="../pages/learn.php">Learn</a>
        |
        <?php 
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
            if (($_SESSION["role"] == "Student") && ($_SESSION["quiz"] == "not taken")){
                echo "<a href=\"../pages/quiz.php\">Quiz</a>|";
            } 
        }
        ?>
        <a href="">Form</a>
        |
        <a href="">About Us</a>
    </div><!-- End of leftLinks -->

    <div id="rightLinks">
        <?php
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
            echo "Hi " . $_SESSION["name"] . "! |";
            if ($_SESSION["role"] == "Instructor"){
                echo "<a href=\"../php/instructor.php\">View Scores</a>|";
            } else {
                if($_SESSION["quiz"] == "taken") {
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
    <a href="../pages/home.php">
        <img id="desktop" src="../images/black_h_lpy.png" alt="Logo">
        <img id="mobile" src="../images/black_v_lpy.png" alt="Logo">
    </a>
    <div id="h2Links">
        <a href="../pages/loops.php">Loops</a>
        |
        <a href="../pages/data.php">Data</a>
        |
        <a href="../pages/syntax.php">Syntax</a>
    </div><!-- End of h2Links -->
</div><!-- End of header2 -->