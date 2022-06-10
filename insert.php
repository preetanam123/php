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

$sql = "INSERT INTO preet (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO preet (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO preet (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();