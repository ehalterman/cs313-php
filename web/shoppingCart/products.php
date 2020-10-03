<?php
session_start();

$_SESSION['cart'] = array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | EH Treats</title>
    <link href="main.css" rel="stylesheet">
</head>
<body>
<header>
<h1>EH Treats</h1>
<h2>Order your Sweet Stuff Here!</h2>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li id="current"><a href="products.php">Shop Now!</a></li>
            <li><a href="cart.php">View Cart</a></li>
        </ul>
    </nav>
</header>
<main>
    <h2>Pick Your Candy Here!</h2>
    <p>Assorted Chocolates</p>
    <img src="images/chocolates.jpg" alt="valentines chocolates" method="post">
    <p>Add to Cart:</p>
        <form action="array_push('Assorted Chocolates 1/2 Pound')">
            <input type="submit" name="submit" class="cartLink" value="1/2 Pound">
        </form>
        <form action="array_push('Assorted Chocolates 1 Pound')">
            <input type="submit" name="submit" class="cartLink" value="1 Pound">
        </form>
           
</main>
<footer>
    <p>EH Treats &copy; 2020 | Stansbury Park, Utah</p>    
</footer>
</body>
</html>