<!-- login.php -->
<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "loginsystem";
$con = mysqli_connect($host , $user , $password , $db_name);
if(mysqli_connect_errno()){
die("Failed to connect with MySQL :".mysqli_connect_errno());
}
?>
