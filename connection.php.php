
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "hotel_db"; 

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
