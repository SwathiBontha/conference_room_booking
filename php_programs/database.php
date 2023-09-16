<?php

#parameters to connect to db
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="php_programs";

#connection to db
$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(!$conn)
{
    die("database connection failed");
}




?>