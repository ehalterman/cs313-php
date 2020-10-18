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
    <div class="logOut">
        <p><a href="#">Log Out</a></p>
    </div>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    </header>
    <body>
    <p> Successful Login</p>
    <?php echo($_SESSION['clientData']('userId'))?>
    </body>
    <footer>
    </footer>
</body>
</html>