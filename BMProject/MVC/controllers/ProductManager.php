<?php
class ProductManager extends Controllers{
    public $producModel;
    public function __construct(){
        $this->producModel = $this->model("ProductModel");
    }
    function displayIntroduction(){
        $this->view("master",["Page"=>"home"]);
    }
    function getProductsbyBand(){
        $this->view("master",["Page"=>"getProductsbyBand"]);
    }

    public function displayProductByBand(){
        if(isset($_POST["btSearch"])){
            $band = $_POST["selectBand"];
            $tblname ="tblproduct";
            $_field = "band";
            $products = $this->producModel->getRecordsbyField($tblname,$_field,$band);
            $this->view("master",["Page"=>"getProductsbyBand","Products"=>$products]);
        }
    }
    function getProductsbyYear(){
        $this->view("master",["Page"=>"getProductsbyYear"]);
    }

    public function displayProductByYear(){
        if(isset($_POST["btSearchYear"])){
            $year = $_POST["selectYear"];
            $tblname ="tblproduct";
            $_field = "year";
            $products = $this->producModel->getRecordsbyField($tblname,$_field,$year);
            $this->view("master",["Page"=>"getProductsbyYear","Products"=>$products]);
        }
    }
    function getProductsbyYearAndBand(){
        $this->view("master",["Page"=>"getProductsbyYearAndBand"]);
    }

    public function displayProductByYearAndBand(){
        if(isset($_POST["btSearchYear"])){
            $year = $_POST["selectYear"];
            $band = $_POST["selectBand"];
            $tblname ="tblproduct";
            $_field1 = "year";
            $_field2 = "band";
            $products = $this->producModel->getRecordsbyField1($tblname,$_field1,$year,$_field2,$band);
            $this->view("master",["Page"=>"getProductsbyYearAndBand","Products"=>$products]);
        }
    }
}
?>