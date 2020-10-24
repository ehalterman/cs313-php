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
    <?php
        if(isset($_SESSION['message'])) {
            echo $_SESSION['message'];
        }
        ?>    <form>
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" required></br>
        <label for="userpassword">Password:</label>
        <input type="password" id="userpassword" name="userpassword"></br>
        <input type="submit" name="submit" id="signin">
        <input type="hidden" name="action" value="login">
    </form>
    </body>
    <footer>
    </footer>
</body>
</html>