<?php
$servername="localhost";
$username="root";
$password="";
$dbname="preet";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("Connect Error: " . $conn->connect_error);
}

$sql="CREATE DATABASE ppreet";
if($conn->query($sql)){
    echo "Created";
}
else{
    echo "Not Created: " . $conn->error;
}
$conn->close();


?>