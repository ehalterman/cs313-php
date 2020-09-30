<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Assignment Week 3</title>
</head>
<body>
    <form action="display.php" method="post">
        <!-- Input Name -->
        Name: <input type="text" name="name"> <br><br>
        <!-- Input Email -->
        E-Mail: <input type="text" name="email"> <br><br>
        <!-- Input Major -->
        Major: <br>
        <input type="radio" id="CS" name="major" value="CS">
        <label for="CS">Computer Science</label><br>
        <input type="radio" id="WDD" name="major" value="WDD">
        <label for="WDD">Web Design and Development</label><br>
        <input type="radio" id="CIT" name="major" value="CIT">
        <label for="CIT">Computer Information Technology</label><br>
        <input type="radio" id="CE" name="major" value="CE">
        <label for="CE">Computer Engineering</label><br><br>
        <!-- Input Countries Visted -->
        Continents Visited:<br>
        <input type="checkbox" id="NA" name="continents[]" value="NA">
        <label for="NA">North America</label><br>
        <input type="checkbox" id="SA" name="continents[]" value="SA">
        <label for="SA">South America</label><br>
        <input type="checkbox" id="EU" name="continents[]" value="EU">
        <label for="EU">Europe</label><br>
        <input type="checkbox" id="AS" name="continents[]" value="AS">
        <label for="AS">Asia</label><br>
        <input type="checkbox" id="AU" name="continents[]" value="AU">
        <label for="AU">Australia</label><br>
        <input type="checkbox" id="AF" name="continents[]" value="AF">
        <label for="AF">Africa</label><br>
        <input type="checkbox" id="AN" name=continents[]" value="AN">
        <label for="AN">Antarctica</label><br><br>
        <!-- Input Comments -->
        Comments:<br>
        <textarea name="comments"></textarea><br>
        <input type="submit" name="submit" value="submit" id="submit" />
    </form>
</body>
</html>