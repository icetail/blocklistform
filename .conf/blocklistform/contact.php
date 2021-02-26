<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
define('DB_SERVER', getenv('DB_SERVER'));
define('MYSQL_USER', getenv('MYSQL_USER'));
define('MYSQL_PASSWORD', getenv('MYSQL_PASSWORD')); 
define('MYSQL_DATABASE', getenv('MYSQL_DATABASE'));

$con = new mysqli(DB_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}


// get the post records
$txtNaam = $_POST['txtNaam'];
$txtEmail = $_POST['txtEmail'];
$txtTelefoon = $_POST['txtTelefoon'];
$txtIpadress = $_POST['txtIpadress'];
$txtCallnr = $_POST['txtCallnr'];

// database insert SQL code
$sql = "INSERT INTO tbl_blocklist (Id, fldNaam, fldEmail, fldTelefoon, fldIpadress, fldCallnr) VALUES ('0', '$txtNaam', '$txtEmail', '$txtTelefoon', '$txtIpadress', '$txtCallnr')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>