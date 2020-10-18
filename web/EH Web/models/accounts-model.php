<?php

require_once 'connection.php';

function getClient($userName){
    $db = phpConnection();
    $sql = 'SELECT * FROM siteUser WHERE userName = :userName';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':userName', $userName, PDO::PARAM_STR);
    $stmt->execute();
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $clientData;
   }

   ?>