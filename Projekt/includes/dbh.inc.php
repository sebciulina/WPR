<?php

$server = "localhost";
$user = "root";
$passwd = "";
$dbName = "blog";

$conn = mysqli_connect($server,$user,$passwd,$dbName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}