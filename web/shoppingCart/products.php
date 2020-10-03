<?php
session_start();

$_SESSION['cart'] = array();

if(isset($_POST['addToCart'])){
    array_push($_SESSION['cart'], $value);
}
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
    <form action="products.php" method="post">
        <input type="checkbox" id="chocolates" name="cart[]" value="chocolates">
        <label for="chocolates"><img src="images/chocolates.jpg" alt="assorted chocolates">Assorted Chocolates</label>

    </form>
           
</main>
<footer>
    <p>EH Treats &copy; 2020 | Stansbury Park, Utah</p>    
</footer>
</body>
</html>