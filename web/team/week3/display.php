<?php

$action = filter_input(INPUT_POST, 'action');

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$major = filter_input(INPUT_POST, 'major', FILTER_SANITIZE_STRING);
$comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
$continents = $_POST['continents'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <p>Name: <?=$name ?></p>
    <p>Email: <?=$email ?></p>
    <p>Major: <?=$major ?></p>
    <p>Countries Vistied:</p>
    <ul>
    <?
    foreach ($continents as $continent) {
        $continent_clean = htmlspecialchars($continent);
        print("<li><p>$continent_clean</p></li>");
    }
    ?>
    </ul>
    <p>Comments: <?=$comments ?></p>
</body>
</html>