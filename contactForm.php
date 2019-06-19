<?php

$config = include('config.php');

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

$name = $_POST["name"] ?? '';
$email = $_POST["email"] ?? '';
$message = $_POST["message"] ?? '';

$dbLink = mysqli_connect($config['dbUrl'], $config['dbUsername'], $config['dbPassword'], $config['database']);

$signUp = $dbLink->prepare("INSERT INTO messages (
                                name, 
                                email, 
                                created
                            ) 
                            VALUES (?, ?, NOW())");
$signUp->bind_param("ss", $_POST["name"], $_POST["email"]);
$signUp->execute();
$signUp->close();

?>