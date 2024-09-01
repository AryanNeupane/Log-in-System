<?php
$server="localhost";
$username="root";
$password="";
$datatbase="loginsys";

$conn=mysqli_connect($server,$username,$password,$datatbase);
if(!$conn){
    echo "database not connected";
}
?>