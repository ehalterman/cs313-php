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


   ?>