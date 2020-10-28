<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>EH Web Create User</title>
</head>
<body>
<header>
    <div class="navigation">
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="clients.php" id="current">Clients</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
            <li class="login"><a href="login.php">Employee Log In</a></li>
        </ul>
    </nav>
    </div>
    <div id="midpinkblock"><p> </p></div>
    <div id="titleBlock">
    <h1>EH Web</h1>
    </div>
    </header>
    <main>
    <h1>Create a New User</h1>
    <?php
        if(isset($_SESSION['message'])) {
            echo $_SESSION['message'];
        }
        ?>
        <form action="/ehWeb/accounts/index.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required></br>
            <label for="userpassword">New Password:</label>
            <input type="text" id="userpassword" name="userpassword" required></br>
            <p>Admin:</p>
            <input type="radio" id="tpriveleges" name="priveleges" value="true" required></br>
            <label for="tpriveleges">True:</label>
            <input type="radio" id="fpriveleges" name="priveleges" value="false" required></br>
            <label for="fpriveleges">False:</label>
            
            <input type="hidden" name="action" value="add-user">
            <input type="submit" name="submit" id="userbtn" value="Create New User">
        </form>
</main>
    <footer>
    </footer>
</body>
</html>