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
        <p><a href='https://intense-dusk-08315.herokuapp.com/EH%20Web/accounts/index.php?action=login-redirect'>Employee Log In</a></p>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="clients.php">Clients</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    </header>
    <body>
        <?php 
        foreach ($clientData as $clientsData){
            echo ('<p>'.$clientsData['firstname']);
        }
        ?>
    </body>
    <footer>
    </footer>
</body>
</html>