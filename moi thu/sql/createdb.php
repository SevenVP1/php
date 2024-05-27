<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("Connection fail:".$conn->connect_error);

} 
echo "Connected successfully";
$sql ="CREATE DATABASE MyDB";
if ($conn->query($sql)===True){
    echo "Database created successfully";
}else{
    echo "Error creating database:".$conn->error;
}
$conn->close();
?>