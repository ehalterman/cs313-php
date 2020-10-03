<?php
session_start();
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
            <li><a href="products.php">Shop Now!</a></li>
            <li id="current"><a href="cart.php">View Cart</a></li>
        </ul>
    </nav>
</header>
<main>
    <?php foreach ($_SESSION['cart'] as $item){
        echo $item + "<br>";}?>
    <p><a href="checkout.php">Check Out</a></p>
</main>
<footer>  
    <p>EH Treats &copy; 2020 | Stansbury Park, Utah</p>  
</footer>
</body>
</html>