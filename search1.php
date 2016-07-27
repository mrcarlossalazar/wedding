<!DOCTYPE html>
<html>
<head>
  <title>test</title>
</head>
<body>
<?php
      $con= new mysqli("localhost","odbc","","test");
            $table = "<table border=1>";

      $name = $_POST['search'];

      if (mysqli_connect_errno())
      {
      echo "Failed to connect to the database: " . mysqli_connect_error();
      }
      $result = mysqli_query($con, "SELECT firstname, lastname, address,address2,city,state,zip,id  FROM guests WHERE firstname LIKE '%{$name}%'");

      while ($row = mysqli_fetch_array($result))
      {
 $table .= "<tr><td>" . $row['firstname'] . " </td><td>" . $row['lastname'] . " </td><td>" . $row['address'] . " </td><td>" .  $row['address2'] . " </td><td>" .  $row['city'] . " </td><td>" .  $row['state'] . " </td><td>" .  $row['zip'] . "<br></td></tr>";
    $table .= "</table>";

      }

      sleep(1);

     // header("Location:/wedding/home.html?");

      mysqli_close($con);
?> 

<form id="test">
<input type="radio" name= "test" id="test" value="test">
<?php echo $table; ?>
</form>
</body>
</html>

