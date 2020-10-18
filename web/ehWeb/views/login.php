<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EH Web HomePage</title>
</head>
<body>
    <header>
    <h1>EH Web</h1>
    <div class="login">
        <p><a href="login.php">Employee Log In</a></p>
    </div>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="clients.php">Clients</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
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
        <input type="password" id="userpassword" name="userpassword">
        <input type="submit" name="submit" id="signin">
        <input type="hidden" name="action" value="login">
    </form>
    </body>
    <footer>
    </footer>
</body>
</html>