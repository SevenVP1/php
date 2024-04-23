<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection fail:".$conn->connect_error);

} 
echo "Connected successfully";
$sql = "INSERT INTO myguests(fristname, lastname, email)
VALUES('John','Doe','jhon@example.com')";
if($conn->query($sql)===TRUE){
    echo "New record created successfully";
}else{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>
