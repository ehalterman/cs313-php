<?php
session_start();
require "models/connection.php";
$db = phpConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>EH Web HomePage</title>
</head>
<body>
<header>
    <div class="navigation">
    <nav>
        <ul>
            <li><a href="index.php" id="current">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
            <?php
            if($_SESSION['loggedin']){
                echo "<li class='logout'><a href='accounts/index.php?action=logout'>Log Out</a></li>";
            }else{
            echo "<li class='login'><a href='views/login.php'>Employee Log In</a></li>"; } ?>
        </ul>
    </nav>
    </div>
    <div id="midpinkblock"><p> </p></div>
    <div id="titleBlock">
    <h1>EH Web</h1>
    </div>
    </header>
    <body>
        <img src="images/fam.jpg" alt="Family Photo">
        <p>Hi, I'm Elise! I'm a nerdy mom living near Salt Lake City.</p>
        <p>I'd love to make your website dreams come true!</p>
    </body>
    <footer>
    </footer>
</body>
</html>