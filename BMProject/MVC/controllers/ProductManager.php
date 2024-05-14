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
}
?>