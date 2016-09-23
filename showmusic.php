<?php

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

      $con= new mysqli($hostname, $username, $password, $database);
      $table = "<link type="text/css" media="screen" rel="stylesheet" href="css/responsive-tables.css" />
<table class="responsive">" ."<td>Artist</td>"."<td>Song Title</td>"."<td>Youtube Link</td>";

      if (mysqli_connect_errno()){
      echo "Failed to connect to the database: " . mysqli_connect_error();
                                 }
      $result = mysqli_query($con, "SELECT *  FROM music");

      while ($row = mysqli_fetch_array($result))
      {
                   $table .= "<tr>";
                   $table .= "<td>".$row[artist]."</td>";
                   $table .= "<td>".$row[song]."</td>";
                   $table .= "<td><a href=".$row[yt].">".$row[song]."</td>";
                   $table .= "</tr>";
      }
      $table .= "</table><script type="text/javascript" src="js/responsive-tables.js"></script>
";
      echo $table;
      echo '<form><button formaction="https://salazarwedding.herokuapp.com/">Go Back</button></form>';
      mysqli_close($con);
?> 