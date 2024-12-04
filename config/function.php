<?php
session_start();
require 'dbcon.php';

//Input field validation
function validate($inputData){
    global $conn;
    $validateData = mysqli_real_escape_string($conn,$inputData);
    return trim($validateData);
}

//Redirect from page to another page with the message(status)
function redirect($url,$status){
    $_SESSION['status']= $status;
    header('location'.$url);
    exit(0);
}

//display messages or status after any process
function alertMessage(){
    if(isset($_SESSION['status'])){
        echo $_SESSION['status'];
        unset($_SESSION['status']);
    }
}





?>