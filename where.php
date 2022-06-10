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

$sql="SELECT id, firstname, lastname FROM preet WHERE
lastname = 'Doe'";
$result=$conn->query($sql);
if($conn->query($sql)==TRUE)
{
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      }}
else{
    echo "ERROR: " . $conn->error;
}
$conn->close();
?>