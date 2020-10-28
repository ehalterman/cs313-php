<?php
session_start();
require "../models/connection.php";
$db = phpConnection();

if (!isset($_SESSION['loggedin'])){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>EH Web HomePage</title>
</head>
<body>
<header>
    <div class="navigation">
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
            <?php
            if($_SESSION['loggedin']){
                echo "<li class='logout'><a href='../accounts/index.php?action=logout'>Log Out</a></li>";
            }else{
            echo "<li class='login'><a href='login.php'>Employee Log In</a></li>"; } ?>
        </ul>
    </nav>
    </div>
    <div id="midpinkblock"><p> </p></div>
    <div id="titleBlock">
    <h1>EH Web</h1>
    </div>
    </header>
    <body>
    <?php 
    if (isset ($_SESSION['username'])){
        echo '<h2>Hello ' . $_SESSION['username'] . '</h2>';} ?>
    </br>
    <a href="clients.php">Access Clients</a>

    </body>
    <footer>
    </footer>
</body>
</html>