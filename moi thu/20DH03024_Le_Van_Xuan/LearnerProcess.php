<?php
class LearnerProcess{
    protected $con;
    protected $severname ="localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname ="db_learner";
    function getCon()
    {
        $this->con = mysqli_connect($this->severname,$this->username,$this->password);
        mysqli_select_db($this->con,$this->dbname);
    }
    public function InsertLearn($name,$className,$mark1,$mark2){
            $result = false;
            $sql = "insert into tblearner(id,name,className,mark1,mark2) values('$name','$className','$mark1','$mark2')";
        
    }
    public function insert_tbLearn(){
        if(isset($_POST["insert"])){
            $name = $_POST["name"];
            $className = $_POST["className"];
            $mark1 = $_POST["mark1"];
            $mark2 = $_POST["mark2"];
            $this->InsertLearn($name,$className,$mark1,$mark2);
            
        }
    }
    }
$LearnerProcess = new LearnerProcess();
$LearnerProcess->getCon();
if($LearnerProcess->insert_tbLearn()){
    echo "them vao thanh cong";
}else{
    echo "them khong thanh cong";
}


?>