<?php
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$states=$_POST['states'];
$dinner=$_POST['dinner'];
$address=$_POST['address'];
$address2=$_POST['address2'];
$zipcode=$_POST['zipcode'];
$phonenumber=$_POST['phonenumber'];

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

$sql = "INSERT INTO guests (firstname,lastname, email,states,dinner,address,address2,zipcode,phonenumber) VALUES ('$firstname', '$lastname','$email','$states','$dinner','$address','$address2','$zipcode','$phonenumber')";

if ($conn->query($sql) === TRUE) {
    echo "Guest(s) registered successfully";
} else {
    echo "Error, could not register: " . $conn->error;
}

$conn->close();
	sleep(10);

      header("Location:/home.html");

?>