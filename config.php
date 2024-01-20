<?php 

$server="localhost";
$username="root'@'localhost";
$password="YES";
$db="sparks_bank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
