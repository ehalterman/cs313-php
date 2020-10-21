<?php
try {
    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"], '/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}

$topics = $db->query('SELECT * FROM topic');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <styles>
        label, input {
            padding: 10px;
        }
    </styles>
</head>

<body>
    <form action="">
        <label for="book">Book</label>
        <input type="text" id="book" name="book"></br>
        <label for="chapter">Chapter</label>
        <input type="number" id="chapter" name="chapter"></br>
        <label for="verse">Verse</label>
        <input type="number" id="verse" name="verse"></br>
        <label for="content">Content</label>
        <textarea id="content" name="content"></textarea>
        <?php
        foreach ($topics as $topic) { ?>
            <input type="checkbox" name="topic[]" value="<?= $topic['id'] ?>">
            <label><?= $topic['name'] ?></label>
        <?php } ?>


    </form>
</body>

</html>