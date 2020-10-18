<?php

require_once 'connection.php';

function getClient($username){
    $db = phpConnection();
    $sql = 'SELECT * FROM siteUser WHERE username = :username';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $clientData;
   }

   ?>