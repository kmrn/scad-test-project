<?php

$config = include('config.php');
$dbLink = new mysqli($config['dbUrl'], $config['dbUsername'], $config['dbPassword'], $config['database']);

if ($dbLink->connect_error)
{
    die("Connection failed: " . $dbLink->connect_error);
}

$sql = "SELECT
            SID,
            name,
            email,
            created
        FROM
            messages";
$result = $dbLink->query($sql);

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
            "name" => $name,
            "email" => $email,
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