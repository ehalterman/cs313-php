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


 if(isset($_COOKIE['username'])){
      $cookieusername= filter_input(INPUT_COOKIE, 'username', FILTER_SANITIZE_STRING);
     }


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
}

switch($action){
    case 'login':
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $userpassword = filter_input(INPUT_POST, 'userpassword', FILTER_SANITIZE_STRING);

        // Run basic checks, return if errors
        if (empty($username) || empty($userpassword)) {
        $message = '<p class="notice">Please provide a valid username and password.</p>';
        $_SESSION['message'] = $message;
        include '../view/login.php';
        exit;
        }
        
        // A valid password exists, proceed with the login process
        // Query the client data based on the email address
        $clientData = getUser($username);
        // Compare the password just submitted against
        // the hashed password for the matching client
        setcookie('username', $clientData['username'], strtotime('+1 year'), '/');
        $cookieusername = $clientData['username'];

        $hashCheck = password_verify($userpassword, $clientData['userpassword']);
        // If the hashes don't match create an error
        // and return to the login view
        if(!$hashCheck) {
        $message = '<p class="notice">Please check your password and try again.</p>';
        $_SESSION['message'] = $message;
        include '../view/login.php';
        exit;
        }
        // A valid user exists, log them in
        $_SESSION['loggedin'] = TRUE;
        // Remove the password from the array
        // the array_pop function removes the last
        // element from an array
        array_pop($clientData);
        // Store the array into the session
        $_SESSION['clientData'] = $clientData;
        // Send them to the admin view
        include '../view/loginLanding.php';
        exit;
    break;
    case 'login-redirect':
        include '../view/login.php';
        break;
    default:
        include '../view/login.php';

    }
    ?>