<?php

$dbname = getenv('MYSQL_DATABASE');
$dbuser = getenv('MYSQL_USER');
$dbpass = getenv('MYSQL_PASSWORD');
$dbhost = getenv('MYSQL_HOST');

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$test_query = "SHOW TABLES FROM `$dbname`";
$result = mysqli_query($conn, $test_query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

echo "Connected successfully";
