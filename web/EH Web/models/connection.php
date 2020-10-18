<?php
session_start();
function phpConnection(){
    try
    {
      $dbUrl = getenv('DATABASE_URL');
    
      $dbOpts = parse_url($dbUrl);
    
      $dbHost = $dbOpts["host"];
      $dbPort = $dbOpts["port"];
      $dbUser = $dbOpts["user"];
      $dbPassword = $dbOpts["pass"];
      $dbName = ltrim($dbOpts["path"],'/');
    
      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $message = '<p>CONNECTED!!!</p>';
      $_SESSION['message'] = $message;
    }
    catch (PDOException $ex)
    {
      $message = 'Error!: ' . $ex->getMessage();
      $_SESSION['message'] = $message;
      die();
    }
    echo $_SESSION['message'];
  }
?>