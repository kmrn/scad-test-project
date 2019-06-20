<?php

$config = include('config.php');
$mysqli = new mysqli($config['dbUrl'], $config['dbUsername'], $config['dbPassword'], $config['database']);

if ($mysqli->connect_error)
{
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT
            SID,
            name,
            email,
            created
        FROM
            messages";
$result = $mysqli->query($sql);

if ($result->num_rows > 0)
{
    $signups = array();
    $signups["body"] = array();
    $signups["count"] = $result->num_rows;

    while ($row = $result->fetch_assoc())
    {
        extract($row);

        $signup = array(
            "SID" => $SID,
            "name" => htmlspecialchars($name),
            "email" => htmlspecialchars($email),
            "created" => $created
        );

        array_push($signups["body"], $signup);
    }

    echo json_encode($signups);
}
else
{
    echo json_encode(
        array("body" => array(), "count" => 0)
    );
}

?>