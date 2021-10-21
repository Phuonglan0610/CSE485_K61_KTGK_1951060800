<?php
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORDS','');
define('DB_NAME','qlnhmau');
define('SIZEURL','http://localhost/qlnhmau/');
$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORDS) or die(mysqli_error());
$db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
?>