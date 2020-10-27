<?php

function phpConnect(){
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

    }
    catch (PDOException $ex)
    {
      echo ("failed");
      die();
    }
  }

function getUser($username){
    $db = phpConnect();
    $sql = 'SELECT * FROM siteUser WHERE username = :username';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $userData;
   }

   function getClient(){
    $db = phpConnect();
    $sql = 'SELECT * FROM client';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $clientData;
   }
   
   function newClient($firstname, $lastname, $phone, $email){
    $db = phpConnect();
    $sql = 'INSERT INTO client (firstName, lastName, phone, email) VALUES (:firstname, :lastname, :phone, :email)';

    $stmt = $db->prepare($sql);

    $stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $stmt->bindValue(':phone', $phone, PDO::PARAM_INT);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);

    $stmt->execute();

    $rowsChanged=$stmt->rowCount();

    $stmt->closeCursor();

    return $rowsChanged;
   }


   ?>