<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'airline_db';

try {
    $conn = new mysqli($servername, $username, $password, $database);
    // echo "Successfully connected to db";
} catch (Exception $e) {
    echo "Connection failed to DB" . $e->getMessage();
}
