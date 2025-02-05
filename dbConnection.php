<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "learncode";

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Database Connection Failed: " . $conn->connect_error]));
}
?>
