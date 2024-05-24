<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

     $reciveData = file_get_contents("php://input");
     $convertToArray = json_decode($reciveData,true);
     
     $username = $convertToArray['email'];
     
     session_start();
     $_SESSION['email'] = $username;
     echo "Login Success";
     
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
     session_start();
     echo $_SESSION['email'];
}














?>