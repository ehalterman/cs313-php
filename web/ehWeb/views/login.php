<?php
session_start();
require "../models/connection.php";
$db = phpConnection();
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
            <li><a href="clients.php">Clients</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
            <li class="login"><a id="current" href="login.php">Employee Log In</a></li>
        </ul>
    </nav>
    </div>
    <div id="midpinkblock"><p> </p></div>
    <div id="titleBlock">
    <h1>EH Web</h1>
    </div>
    </header>
    <body>
        <h1>Log In</h1>
        <?php
        if(isset($_SESSION['message'])) {
            echo $_SESSION['message'];
        }
        ?>
        <form action="/ehWeb/accounts/" method="post">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" required></br>
        <label for="userpassword">Password:</label>
        <input type="password" id="userpassword" name="userpassword"></br>
        <input type="submit" name="submit" value="Sign In">
        <input type="hidden" name="action" value="log-in">
    </form>
    </body>
    <footer>
    </footer>
</body>
</html>