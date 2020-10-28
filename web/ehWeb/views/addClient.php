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
    <?php
        if(isset($_SESSION['message'])) {
            echo $_SESSION['message'];
        }
        ?>
        <h1>Create a New Client</h1>
        <form action="/ehWeb/clients/index.php" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required></br>
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required></br>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required></br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required></br>
            <input type="hidden" name="action" value="add-client">
            <input type="submit" name="submit" id="clientbtn" value="Add New Client">
        </form>
</main>
    <footer>
    </footer>
</body>
</html>