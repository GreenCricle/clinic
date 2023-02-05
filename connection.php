<?php
$servername = "sql12.freesqldatabase.com";
$usernameb = "sql12595614";
$password = "W7WcgRvdvp";
$dbname = "sql12595614";

// Create connection
$conn = mysqli_connect($servername, $usernameb, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>