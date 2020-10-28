<?php
session_start();
require "dbconnect.php";
$db = get_db();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcom</title>
    <meta name="Welcome" content ="Welcome">
</head>

<body>

<h1>Welcome</h1> 
    <?php if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: sign-in.php");
	die();
}

?>

</body>
</html>