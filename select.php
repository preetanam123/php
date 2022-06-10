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

$sql="SELECT id, firstname, lastname FROM preet";
$result=$conn->query($sql); 
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc()) 
    echo "ID: ". $row["id"] . "  Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
}
else{
    echo "ERROR: " . $conn->error;
}
$conn->close();
?>