<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EH Web Login</title>
</head>
<body>
    <form>
        <label for="userName">User Name:</label>
        <input type="text" id="userName" name="userName" required></br>
        <label for="userPassword">Password:</label>
        <input type="password" id="userPassword" name="userPassword">
        <input type="submit" name="submit" id="signin">
        <input type="hidden" name="action" value="login">
    </form>
</body>
</html>