<?php

$connection;
$root = '';
$password = '';
$base = 'dashboardBase';

function connect()
{
    global $connection, $root, $password, $base;

    $connection = mysqli_connect(
        'localhost:3306',
        $root,
        $password,
        $base
    )
        or die(mysqli_connect_error());
}


function query($sql)
{
    global $connection;
    $query = mysqli_query($connection, $sql)
        or die(mysqli_connect_error());
}

function close()
{
    global $connection;
    mysqli_close($connection);
}

?>