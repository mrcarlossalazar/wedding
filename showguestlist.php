<?php

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

      $con= new mysqli($hostname, $username, $password, $database);
      $table = "<table border=1>" ."<td>First Name</td>"."<td>Last Name</td>"."<td>Email</td>"."<td>State</td>"."<td>Dinner Option</td>"."<td>Address</td>"."<td>Address 2</td>"."<td>Zip Code</td>"."<td>Phone</td>";

      if (mysqli_connect_errno()){
      echo "Failed to connect to the database: " . mysqli_connect_error();
                                 }
      $result = mysqli_query($con, "SELECT firstname,lastname, email,states,dinner,address,address2,zipcode,phonenumber FROM guests");

      while ($row = mysqli_fetch_array($result))
      {
                   $table .= "<tr>";
                   $table .= "<td>".$row[firstname]."</td>";
                   $table .= "<td>".$row[lastname]."</td>";
                   $table .= "<td>".$row[email]."</td>";
                   $table .= "<td>".$row[states]."</td>";
                   $table .= "<td>".$row[dinner]."</td>";
                   $table .= "<td>".$row[address]."</td>";
                   $table .= "<td>".$row[address2]."</td>";
                   $table .= "<td>".$row[zipcode]."</td>";
                   $table .= "<td>".$row[phonenumber]."</td>";
                   $table .= "</tr>";
      }
      $table .= "</table>";
      echo $table;
      echo '<form><button formaction="https://salazarwedding.herokuapp.com/">Go Back</button></form>';
      mysqli_close($con);
?> 