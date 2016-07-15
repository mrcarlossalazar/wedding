<?php
// we connect to example.com and port 3307

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');


$link = mysql_connect('nj5rh9gto1v5n05t.cbetxkdyhwsb.us-east-1.rds.amazonaws.com
:3306', 'l359jm5246ldgfqn', 'enu1agq34j8fjzya');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>