<?php
class DBproduct {
    function connectdb($dbname){
        $servername = "localhost";
        $username = "root";
        $password = "";
         $conn = new mysqli($servername,$username,$password,$dbname);
         if($conn->connect_error){
            die("Connection fail:".$conn->connect_error);
        
        } 
        echo "Connected successfully";
        return $conn;
    }
    function showproduct(){
        
        $sql = "SELECT id, pname,company,year,band FROM tblproduct";
        $result = $this->connectdb("productdb")->query($sql);
        if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
        echo "<br>".$row["id"].'-'.$row['pname'].'-'.$row['company'].$row['year'].$row['band']."<br>";
    }
        }else{
    echo "0 results";
        }
        $this->connectdb("productdb")->close();
    }

}
$pr = new DBproduct();
$pr->connectdb("productdb");
$pr->showproduct();

?>