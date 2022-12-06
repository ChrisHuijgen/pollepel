<?php

$name= "localhost";
$username = "db87247";
$password = "Onepiece2021";
$db_name = "87247_database";

$conn = mysqli_connect($name, $username, $password, $db_name);

if(!$conn){
    echo "connection faild";
    exit();
}