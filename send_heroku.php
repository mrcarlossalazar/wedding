<?php
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');
$date = new data_create();


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$states=$_POST['states'];
$dinner=$_POST['dinner_selection'];
$address=$_POST['address'];
$address2=$_POST['address2'];
$zipcode=$_POST['zipcode'];
$phonenumber=$_POST['phonenumber'];
$date=$_POST['date'];
$date->date_format($date, 'U = Y-m-d H:i:s');

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$sql = "CREATEDB wedding";


"INSERT INTO guests (firstname,lastname, email,states,dinner,address,address2,zipcode,phonenumber,date) VALUES ('$firstname', '$lastname','$email','$states','$dinner','$address','$address2','$zipcode','$phonenumber','$date')";

if ($conn->query($sql) === TRUE) {
    echo "Guests added to RVSP List successfully  ";
} else {
    echo "Error RSVPing: " . $conn->error;
}

$conn->close();
?>