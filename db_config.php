<?php

$host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "booking_calendar"; 
$dsn        = "mysql:host=$host;dbname=$dbname"; 
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
							
/* Attempt to connect to MySQL database */
try{
    $pdo_connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e){
		session_start();
    $_SESSION['error'] = "There was an issue connecting to the database. Please try again later!";
    header("location: /");
		exit();
}						
?>