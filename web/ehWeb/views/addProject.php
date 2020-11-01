<?php
session_start();
require "../models/connection.php";
$db = phpConnection();

if (!($_SESSION['userData']['priveleges'])){
    header('Location: ../index.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>EH Web Add New Client</title>
</head>
<body>
<header>
    <div class="navigation">
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="clients.php" id="current">Clients</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
            <?php
            if($_SESSION['loggedin']){
                echo "<li class='logout'><a href='../accounts/index.php?action=logout'>Log Out</a></li>";
            }else{
            echo "<li class='login'><a href='login.php'>Employee Log In</a></li>"; } ?>
        </ul>
    </nav>
    </div>
    <div id="midpinkblock"><p> </p></div>
    <div id="titleBlock">
    <h1>EH Web</h1>
    </div>
    </header>
    <main>
        <h1>Create a New Client</h1>
        <form action="/ehWeb/clients/index.php" method="POST">
        <fieldset>
            <legend>Company Info</legend>
            <label for="companyname">Company name:</label>
            <input type="text" id="companyname" name="companyname" required></br>
            
            <label for="siteurl">Project URL:</label>
            <input type="text" id="siteurl" name="siteurl" required></br>
            Site Description:
            <textarea name="sitedescription"></textarea><br>
        </fieldset>
        <fieldset>
        <legend>Down Payment Info</legend>
            <label for="totaldown">Total Down Payment Amount:</label>
            <input type="number" id="totaldown" name="totaldown" min="0.00" max="10000.00" step="0.01" required></br>
            <label for="downpaid">Total Down Payment Paid:</label>
            <input type="number" id="downpaid" name="downpaid" min="0.00" max="10000.00" step="0.01" required></br>
        </fieldset>
        <fieldset>
        <legend>Total Payment Info</legend>
            <label for="totalcost">Total Payment Amount:</label>
            <input type="number" id="totalcost" name="totalcost" min="0.00" max="10000.00" step="0.01" required></br>
            <label for="totalpaid">Total Payment Paid:</label>
            <input type="number" id="totalpaid" name="totalpaid" min="0.00" max="10000.00" step="0.01" required></br>
        </fieldset>    
           
            <input type="submit" value="Add New Project">
            <input type="hidden" name="action" value="add-project">
        </form>
</main>
    <footer>
    </footer>
</body>
</html>