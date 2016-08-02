<?php
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');


$artist=$_POST['artist'];
$song=$_POST['song'];
$yt=$_POST['yt'];

USE enu1agq34j8fjzya;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$sql = "INSERT INTO music (artist,song, yt) VALUES ('$artist','$song','$yt')";

if ($conn->query($sql) === TRUE) {
    echo "Your request has been submitted";

} else {
    echo "Try Again " . $conn->error;
}

//header("Location:/wedding/home.html?");
$conn->close();
?>