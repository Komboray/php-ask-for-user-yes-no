<?php


$localhost = "127.0.0.1";
$user = "root";
$pass = "";
$db_name = "jaribu";
$conn = "";
$conn = mysqli_connect($localhost, $user, $pass, $db_name);
if($conn){
    // echo "You are connected";
}else{
    echo "There is  aproblesm nigga!";
}