<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
define('DB_SERVER', getenv('DB_SERVER'));
define('DB_USERNAME', getenv('DB_USERNAME'));
define('DB_PASSWORD', getenv('DB_PASSWORD')); 
define('DB_NAME', getenv('DB_NAME'));

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
    die ("ERROR: Could not connect. " . mysqli_connect_error());
}

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