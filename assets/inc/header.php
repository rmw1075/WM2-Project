<link rel="stylesheet" type="text/css" href="../css/template.css" />

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
        session_start();
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
            echo "Hi " . $_SESSION["name"] . "|";
            if ($_SESSION["role"] == "Instructor"){
                echo "<a href=\"../php/instructor.php\">View Scores</a>|";
            } elseif ($_SESSION["quiz"] == "taken"){
                echo "<a href=\"../php/results.php\">View Your Scores</a>|";
            }
            echo "<a href=\"../php/logout.php\">Logout</a>";
        } else {
            echo "<a href=\"../php/login.php\">Login</a>";
        }
        ?>
    </div><!-- End of rightLinks -->
</div><!-- End of header -->
<br />