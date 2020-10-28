<?php
session_start();
require "dbconnect.php";
$db = get_db();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign-Up</title>
    <meta name="Sign-Up" content ="Sign-Up Index">
</head>
    
<body>
    <h1>Sign Up</h1>
<form action="index.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    
    <label for="password">Password:</label>
    <input type="text" id="password" name="password">  
    
    <input type="submit" value="Submit">
    <input type="hidden" name="action" value="register">
</form>    
    
</body>