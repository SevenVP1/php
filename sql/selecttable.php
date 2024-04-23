<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection fail:".$conn->connect_error);

} 
echo "Connected successfully";
$sql = "SELECT id, fristname, lastname FROM MyGuests";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<br>".$row["id"].'-'.$row['fristname'].'-'.$row['lastname']."<br>";
    }
}else{
    echo "0 results";
}
$conn->close();
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productdb";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection fail:".$conn->connect_error);

} 
echo "Connected successfully";
$sql = "SELECT id, pname,company,year,band FROM tblproduct";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<br>".$row["id"].'-'.$row['pname'].'-'.$row['company'].$row['year'].$row['band']."<br>";
    }
}else{
    echo "0 results";
}
$conn->close();
?>
