<?php

require_once 'connection.php';

function getUser($username){
    $db = phpConnection();
    $sql = 'SELECT * FROM siteUser WHERE username = :username';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $userData;
   }

   function getClient(){
    $db = phpConnection();
    $sql = 'SELECT * FROM client';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $clientData;
   }
   
   function newClient($firstname, $lastname, $phone, $email){
    $db = phpConnection();
    $sql = 'INSERT INTO client (firstname, lastname, phone, email) VALUES (:firstname, :lastname, :phone, :email)';

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