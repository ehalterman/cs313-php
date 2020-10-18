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

switch($action){
    case 'viewClient':
        getClient();
        include 'clients.php';
    break;
    default:
        include 'clients.php';
}
?>