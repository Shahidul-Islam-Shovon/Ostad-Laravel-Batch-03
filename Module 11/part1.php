<?php

//Server Request

if($_SERVER['REQUEST_METHOD'] == "POST"){
     echo "this is a POST Request";
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {
     echo "this is a GET Request";
}

if ($_SERVER['REQUEST_METHOD'] == "PATCH") {
     echo "this is a UPDATE Request";
}




?>