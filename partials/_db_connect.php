<?php 

$server = "localhost";
$username = "root";
$password ="";
$database = "government database";


$conn  = mysqli_connect($server, $username, $password, $database);

if(!$conn)
{
    echo "error 500. Connection to server failed ";
}



?>