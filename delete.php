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

$sql="DELETE FROM preet WHERE
lastname = 'Doe'";
$result=$conn->query($sql);
if($conn->query($sql)==TRUE)
{
    echo "Deleted Successfully";
}
else{
    echo "ERROR: " . $conn->error;
}
$conn->close();
?>