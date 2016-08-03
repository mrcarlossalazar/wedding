<?php

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

      $con= new mysqli($hostname, $username, $password, $database);
      $table = "<table border=1>" ."<td>Artist</td>"."<td>song</td>"."<td>Youtube Link</td>";

      if (mysqli_connect_errno()){
      echo "Failed to connect to the database: " . mysqli_connect_error();
                                 }

      $result = mysqli_query($con, "SELECT *  FROM music");



      while ($row = mysqli_fetch_array($result))
      {
                   $table .= "<tr>";
                   $table .= "<td>".$row[artist]."</td>";
                   $table .= "<td>".$row[song]."</td>";
                   $table .= "<td>".$row[yt]."</td>";
                   $table .= "</tr>";
      }
      $table .= "</table>";
      sleep(10);
      echo $table;
      sleep(10);

      mysqli_close($con);
      header("Location:https://salazarwedding.herokuapp.com/");

?> 




