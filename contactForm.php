<?php

$config = include('config.php');

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

$mysqli = new mysqli($config['dbUrl'], $config['dbUsername'], $config['dbPassword'], $config['database']);

if ($mysqli->connect_error)
{
    die("Connection failed: " . $mysqli->connect_error);
}

$name = $mysqli->real_escape_string($_POST['name']);
$email = $mysqli->real_escape_string($_POST['email']);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

$sql = "INSERT INTO messages (
            name, 
            email, 
            created
        ) 
        VALUES (?, ?, NOW())";

if ($signUp = $mysqli->prepare($sql))
{
    $signUp->bind_param("ss", $name, $email);
    $signUp->execute();

    if ($signUp->error)
    {
        die("Save failed: " . $mysqli->connect_error);
    }

    $signUp->close();
}

$mysqli->close();

?>