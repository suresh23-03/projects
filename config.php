<?php

$servername="localhost";
$username='root';
$password='';
$db='employee';
$conn=mysqli_connect($servername,$username,$password,$db);
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

?>
