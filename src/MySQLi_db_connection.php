<?php
$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "toor";
$DATABASE_NAME = "php_basic";

// Create connection
$conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$conn->set_charset("utf8");

//$sql = "SELECT id, username, email FROM users";
//$result = mysqli_query($conn,$sql);
//------------------------------------


//$row = mysqli_fetch_row($result);

//mysqli_close($conn); //ver como cerrarla
?>
