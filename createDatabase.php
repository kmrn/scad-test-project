<?php

$config = include('config.php');
$mysqli = new mysqli($config['dbUrl'], $config['dbUsername'], $config['dbPassword']);

if (!$mysqli)
{
    die('Connection Error: ' . $mysqli->error());
}

$createDbSql = 'CREATE DATABASE IF NOT EXISTS scad_test_db';

if ($mysqli->query($createDbSql))
{
    echo "SUCCESS\n";
}
else
{
    echo "ERROR: Database not created - " . $mysqli->error() . "\n";
}

$createMessagesTable = "CREATE TABLE IF NOT EXISTS scad_test_db.messages (
                            SID INT AUTO_INCREMENT,
                            name VARCHAR(255) NOT NULL,
                            email VARCHAR(255) NOT NULL,
                            created DATETIME,
                            PRIMARY KEY (SID)
                        )";

if ($mysqli->query($createMessagesTable))
{
    echo "SUCCESS.\n";
}
else
{
    echo "ERROR: Messages table not created - " . $mysqli->error() . "\n";
}

$mysqli->close();

?>