<?php
$servername = "localhost";
$username = "id7922411_root";
$database = "id7922411_soccerchampions";
$password = "Andres1a";
//  Create a new connection to the MySQL database using PDO
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo "conexion satisfactoria";
?>