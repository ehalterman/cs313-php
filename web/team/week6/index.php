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

$book = filter_input(INPUT_POST, 'book', FILTER_SANITIZE_STRING);
if (!empty($book)) {
    $chapter = filter_input(INPUT_POST, 'chapter', FILTER_SANITIZE_NUMBER_INT);
    $verse = filter_input(INPUT_POST, 'verse', FILTER_SANITIZE_NUMBER_INT);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
    $topicInput = filter_input(INPUT_POST, 'topic[]', FILTER_SANITIZE_STRING);


    $stmt = $db->prepare('INSERT INTO Scriptures (id, book, chapter, verse, content) VALUES (default, :book, :chapter, :verse, :content)');
    $stmt->bindValue(':book', $book, PDO::PARAM_STR);
    $stmt->bindValue(':chapter', $chapter, PDO::PARAM_INT);
    $stmt->bindValue(':verse', $verse, PDO::PARAM_INT);
    $stmt->bindValue(':content', $content, PDO::PARAM_STR);
    $stmt->execute();

$scriptureId = $db->lastInsertId("scriptures_id_seq");

foreach($topicInput as $topic){
    $stmt = $db->prepare('INSERT INTO links (id, topicid, scriptureid) VALUES (default, :topicid, :scriptureid)');
    $stmt->bindValue(':topicid', $topic, PDO::PARAM_INT);
    $stmt->bindValue(':scriptureid', $scriptureId, PDO::PARAM_INT);
    $stmt->execute();
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label,
        input {
            margin: 10px;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post">
        <label for="book">Book</label>
        <input type="text" id="book" name="book"></br>
        <label for="chapter">Chapter</label>
        <input type="number" id="chapter" name="chapter"></br>
        <label for="verse">Verse</label>
        <input type="number" id="verse" name="verse"></br>
        <label for="content">Content</label>
        <textarea id="content" name="content"></textarea></br>
        <?php
        foreach ($topics as $topic) { ?>
            <input type="checkbox" name="topic[]" value="<?= $topic['id'] ?>">
            <label><?= $topic['name'] ?></label>
        <?php } ?></br>
        <input type="submit" value="submit">
    </form>
</body>

</html>