<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Andy@2023";
$dbname = "login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
   die("failed to connect!");
}