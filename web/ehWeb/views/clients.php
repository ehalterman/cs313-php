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
            <li><a href="../index.php">Home</a></li>
            <li><a href="clients.php">Clients</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
            <li class="login"><a href="login.php">Employee Log In</a></li>
        </ul>
    </nav>
    </div>
    <h1>EH Web</h1>
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