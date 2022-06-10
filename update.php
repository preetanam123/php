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

$sql="UPDATE preet 
SET
firstname='preet'
WHERE
lastname = 'Moe'";
$result=$conn->query($sql);
if($conn->query($sql)==TRUE)
{
    echo "Updated Successfully";
}
else{
    echo "ERROR: " . $conn->error;
}
$conn->close();
?>