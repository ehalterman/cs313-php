<?php
session_start();
require "dbconnect.php";
$db = get_db();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign-In</title>
    <meta name="Sign-In" content ="Sign-In">
</head>
    
<body>
    <h1>Sign In</h1>
<form action="index.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    
    <label for="password">Password:</label>
    <input type="text" id="password" name="password">  
    
    <input type="submit" value="Login">
    <input type="hidden" name="action" value="login">
</form>    
    
</body>