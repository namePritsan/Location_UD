<?php
$host="localhost";
$user="root";
$pass="";
$databas="location";

$link=mysqli_connect($host,$user,$pass,$databas);
if(!$link){
    echo "can't connection MySQL";
    exit();
}
?>