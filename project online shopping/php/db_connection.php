<?php
session_start();
$config['host']=    "localhost" ;
$config['user']=    "root"      ;
$config['pass']=    ""          ;
$config['name']=    "tango"     ;
$connect = database_connection($config);

function database_connection ($config)
{
    $db_connection = new mysqli($config['host'],$config['user'],$config['pass'],$config['name']);
    if (mysqli_connect_errno())
    {
        printf("Connection failed: %s\n", mysqli_connect_error());
        exit();
    }
    return $db_connection;
}
?>