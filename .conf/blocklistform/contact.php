<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
define('DB_SERVER', 'mysql');
define('MYSQL_USER', getenv('MYSQL_USER'));
define('MYSQL_PASSWORD', getenv('MYSQL_PASSWORD')); 
define('MYSQL_DATABASE', getenv('MYSQL_DATABASE'));

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) or die('Failed to connect to the database, died with error:');


// get the post records
$txtNaam = $_POST['txtNaam'];
$txtEmail = $_POST['txtEmail'];
$txtTelefoon = $_POST['txtTelefoon'];
$txtIpadress = $_POST['txtIpadress'];
$txtCallnr = $_POST['txtCallnr'];

// database insert SQL code
$sql = "INSERT INTO `tbl_blocklist` (`Id`, `fldNaam`, `fldEmail`, `fldTelefoon`, `fldIpadress`, `fldCallnr`) VALUES ('0', '$txtNaam', '$txtEmail', '$txtTelefoon', '$txtIpadress', '$txtCallnr')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
?>