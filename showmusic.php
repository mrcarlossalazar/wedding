<?php

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

      $con= new mysqli($hostname, $username, $password, $database);
      $table = "<table border=1>";

      $name = $_POST['search'];

      if (mysqli_connect_errno())
      {
      echo "Failed to connect to the database: " . mysqli_connect_error();
      }
      $result = mysqli_query($con, "SELECT * FROM music");

      while ($row = mysqli_fetch_array($result))
      {
        $table .= '<tr>';
        foreach($row as $key=>$value) {
        $table .= '<td>',$music_id,'</td>',$artist,'</td>',$song,'</td>',$yt,'</td>';
      }
        $table .= '</tr>';
      }


 //$table .= "<tr><td>" . $row['music_id'] . " </td><td>" . $row['artist'] . " </td><td>" . $row['song'] . " </td><td>" .  $row['yt'] . "<br></td></tr>";
    $table .= "</table>";

      
      echo $table;
      sleep(1);

     // header("Location:/wedding/home.html?");
      mysqli_close($con);
?> 