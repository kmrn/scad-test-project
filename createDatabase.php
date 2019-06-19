<?php

$config = include('config.php');
$link = mysqli_connect($config['dbUrl'], $config['dbUsername'], $config['dbPassword']);

if (!$link)
{
    die('Connection Error: ' . mysqli_error());
}

$createDbSql = 'CREATE DATABASE IF NOT EXISTS scad_test_db';

if (mysqli_query($link, $createDbSql))
{
    echo "SUCCESS\n";
}
else
{
    echo "ERROR: Database not created - " . mysqli_error($link) . "\n";
}

$createMessagesTable = "CREATE TABLE IF NOT EXISTS scad_test_db.messages (
                            SID INT AUTO_INCREMENT,
                            name VARCHAR(255) NOT NULL,
                            email VARCHAR(255) NOT NULL,
                            created DATE,
                            PRIMARY KEY (SID)
                        )";

if (mysqli_query($link, $createMessagesTable))
{
    echo "SUCCESS.\n";
}
else
{
    echo "ERROR: Messages table not created - " . mysqli_error($link) . "\n";
}

mysqli_close($link);

?>