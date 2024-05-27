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
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fristname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql)===TRUE){
    echo " Table MyGuests Created successfully"; 
}else{
    echo "Error creating table:".$conn->error;
}
$conn->close();
?>
