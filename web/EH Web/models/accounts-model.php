<?php

require_once '../models/connection.php';

function getClient($userId){
    $db = phpConnection();
    $sql = 'SELECT * FROM siteUser WHERE userId = :userId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':userId', $userId, PDO::PARAM_STR);
    $stmt->execute();
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $clientData;
   }

   ?>