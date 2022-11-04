
<?php

$servername = "localhost"; #localhost
$username = "root"; #username of phpmyadmin
$password = ""; #password of phpmyadmin
$dbname = "intrepide_food"; #database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?> 