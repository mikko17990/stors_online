<?php
$host="localhost";
$user="root";
$password="";
$database="stores";

$conn=mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: ". mysql_connect_error();
}
?>