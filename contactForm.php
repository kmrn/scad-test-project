<?php

$config = include('config.php');

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

$dbLink = mysqli_connect($config['dbUrl'], $config['dbUsername'], $config['dbPassword'], $config['database']);

$name = mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

$signUp = $dbLink->prepare("INSERT INTO messages (
                                name, 
                                email, 
                                created
                            ) 
                            VALUES (?, ?, NOW())");
$signUp->bind_param("ss", $name, $email);
$signUp->execute();
$signUp->close();

?>