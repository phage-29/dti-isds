<?php
//localhost
// $servername = "localhost";
// $username = "root";
// $password = "Password@123!";
// $database = "msgitdb";

//localhost
$servername = "localhost";
$username = "zoomrequestadmin";
$password = "!r7TG4WuxCRJUgoo";
$database = "msgitdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

$website = "ISDS";

$conn->query("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))");