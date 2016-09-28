<html>
      <head>
            <title>Salazar Wedding Music Requests</title>
            <link rel="stylesheet" href="css/responsive-tables.css">
            <link rel="stylesheet" href="css/normalize.min.css">
            <link rel="stylesheet" href="css/main-1.6.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="js/vendor/responsive-tables.js"></script>
            <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
            <style type="text/css"> section {height: 250%;}</style>
      </head>
      <body>
            <?php
            $url = getenv('JAWSDB_URL');
            $dbparts = parse_url($url);
            $hostname = $dbparts['host'];
            $username = $dbparts['user'];
            $password = $dbparts['pass'];
            $database = ltrim($dbparts['path'],'/');
            $con= new mysqli($hostname, $username, $password, $database);
            $table ='<table border="2|1" width = "100%" class = "responsive">'."<td>Artist</td>"."<td>Song Title</td>"."<td>Youtube Link</td>";
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
      $table .= "</table>";
      mysqli_close($con);
      ?>
      <div id="bg-image">
            <img src="img/bg-pic.jpg" alt="bg" />
      </div>
      <div id="bg-container">
            
            <div class="main-container">
                  <div class="main wrapper clearfix">
                         <section>
                        <h1>Spotify Requests</h1>
                              <div class="column full">
                        <iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3A12181151300%3Aplaylist%3A48eZqdIOuon1uS1CKyIp4M" width="100%" height="50%" frameborder="1" allowtransparency="true"></iframe>
                              <form><button class="button round" formaction="https://salazarwedding.herokuapp.com/">Go Back</button></form>
                              </div><!--end column-->
                        </section>
                        <section>
                              <h1>Youtube Requests</h1>
                              <div class="column full">
                                    <?php echo $table; ?>
                              <form><button class="button round" formaction="https://salazarwedding.herokuapp.com/">Go Back</button></form>
                              </div><!--end column-->
                        </section>
                        </div> <!-- #main -->
                        </div> <!-- #main-container -->
                        </div> <!-- #bg-container -->
                        <script src="js/main-1.6.js"></script>
                  </body>
            </html>