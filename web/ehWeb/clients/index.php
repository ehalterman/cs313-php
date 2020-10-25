<?php
//This is the accounts controller
session_start();

//get database connection file
require_once '../models/connection.php';
//get the PHP Motors model for use as needed
//require_once '../model/main-model.php';
//get the accounts model
require_once '../models/accounts-model.php';
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
        getClient();
        include 'clients.php';
    break;
    case 'add-client':
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        if(empty($firstname) || empty($lastname) || empty($phone) || empty($email)){
            $message = '<p class="message">Please provide information for all empty form fields.</p>';
            include '../view/addClient.php';
            exit; 
        }
        $clientOutcome = newClient($firstname, $lastname, $phone, $email);

        if($clientOutcome === 1){
            $_SESSION['message'] = "<p class='message'> Thanks you for adding a new client</p>";
            header('Location: /ehWeb/views/clients.php');
            exit;
        } else{
            $_SESSION['message'] = "<p class='message'> Sorry, there was an error</p>";
            include '../view/addClient.php';
            exit;
        }
    break;
    default:
        include 'clients.php';
}
?>