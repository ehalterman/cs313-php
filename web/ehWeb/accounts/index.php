<?php
//This is the accounts controller
session_start();

//get database connection file
require "../models/connection.php";
//get the PHP Motors model for use as needed
//require_once '../model/main-model.php';
//get the accounts model
//require_once '../models/accounts-model.php';
// Get the functions library
//require_once '../library/functions.php';




$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
}

switch($action){
    case 'log-in':
        $db = phpConnection();
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $userpassword = filter_input(INPUT_POST, 'userpassword', FILTER_SANITIZE_STRING);

        $stmt = $db->prepare('SELECT * FROM siteuser WHERE username = :username');
        $stmt->bindValue(':username', $username);
        $stmt->execute();
        
        $clientData = $stmt->fetch();
        $hashCheck = password_verify($userpassword, $clientData['userpassword']);
        // Compare the password just submitted against
        // the hashed password for the matching client

        // If the hashes don't match create an error
        // and return to the login view
        if(!$hashCheck) {
        $message = '<p class="notice">Please check your password and try again.</p>';
        $_SESSION['message'] = $message;
        header('Location: ../views/login.php');
        exit;
        }
        // A valid user exists, log them in
        $_SESSION['loggedin'] = TRUE;
        // Remove the password from the array
        // the array_pop function removes the last
        // element from an array
        // Store the array into the session
        $_SESSION['userData'] = $clientData;
        $_SESSION['username'] = $username;
        // Send them to the admin view
        header('Location: ../views/loginLanding.php');
        exit;
    break;
    case 'login-redirect':
        include '../view/login.php';
        break;
    case 'add-user':
        $db = phpConnection();
        $username = filter_input(INPUT_POST, 'username');
        $priveleges = filter_input(INPUT_POST, 'priveleges');
        $userpassword = filter_input(INPUT_POST, 'userpassword');
        $passwordhash = password_hash($userpassword, PASSWORD_DEFAULT);


        $stmt = $db->prepare('INSERT INTO siteuser (username, userpassword, priveleges) VALUES (:username, :userpassword, :priveleges)');
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':userpassword', $passwordhash);
        $stmt->bindValue(':priveleges', $priveleges);
        $stmt->execute();
        $stmt->closeCursor();
        header('Location: ../views/clients.php');
    
    break;
    case 'delete-user':
        $db = phpConnection();
        $userid = filter_input(INPUT_POST, 'userid');
        $username = filter_input(INPUT_POST, 'username');
        $priveleges = filter_input(INPUT_POST, 'priveleges');
        $userpassword = filter_input(INPUT_POST, 'userpassword');
        
        $stmt = $db->prepare('DELETE FROM siteuser WHERE userid = :userid');
        $stmt->bindValue(':userid', $userid);
        $stmt->execute();
        $stmt->closeCursor();
        header('Location: ../views/userManagement.php');

    break;
    case 'logout':
        session_destroy();
        header('Location: /ehWeb/'); 
    break;
    default:
    header('Location: ../views/login.php');

    }
    ?>