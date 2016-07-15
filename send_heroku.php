<?php
$servername = "nj5rh9gto1v5n05t.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306
";
$username = "l359jm5246ldgfqn";
$password = "c1b5usjy5e8xg9km";
$dbname = "test";
$date = new DateTime();


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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$sql = "INSERT INTO guests (firstname,lastname, email,state,dinner,address,address2,zipcode,phonenumber,date) VALUES ('$firstname', '$lastname','$email','$states','$dinner','$address','$address2','$zipcode','$phonenumber','$date')";

if ($conn->query($sql) === TRUE) {
    echo "Guests added to RVSP List successfully  ";
} else {
    echo "Error RSVPing: " . $conn->error;
}

$conn->close();
?>