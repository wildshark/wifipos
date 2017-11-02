<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 20-Oct-17
 * Time: 5:11 PM
 */

// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');

//database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_wifi";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
   // die("Connection failed: " . $conn->connect_error);

    echo"Can't connect to database";
}
//echo "Connected successfully";