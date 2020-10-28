<?php
//This is the accounts controller
session_start();

//get database connection file
require '../models/connection.php';
//get the PHP Motors model for use as needed
//require_once '../model/main-model.php';
//get the accounts model
//require_once '../models/accounts-model.php';
// Get the functions library
//require_once '../library/functions.php';


// if(isset($_COOKIE['userId'])){
//      $cookieUserId = filter_input(INPUT_COOKIE, 'userId', FILTER_SANITIZE_STRING);
//     }


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'viewClient':
        $db = phpConnection();
        $sql = 'SELECT * FROM client';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        $_SESSION['client'] = $clientData;

        include 'clients.php';
    break;
    case 'add-client':
        $db = phpConnection();
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone');
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        $sql = 'INSERT INTO client (firstname, lastname, phone, email) VALUES (:firstname, :lastname, :phone, :email)';
        $stmt = $db->prepare($sql);
    
        $stmt->bindValue(':firstname', $firstname);
        $stmt->bindValue(':lastname', $lastname);
        $stmt->bindValue(':phone', $phone);
        $stmt->bindValue(':email', $email);
    
        $stmt->execute();
        $stmt->closeCursor();
        header('Location: ../views/clients.php');
    break;
    default:
        include 'clients.php';
}
?>