<?php
$mysqli = new mysqli('localhost', 'root', 'Aryan&12', 'netflix_clone');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} else {
    echo "Connected successfully";
}
?>
