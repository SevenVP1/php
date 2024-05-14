<?php
class ProductModel extends dbProduct
{
    public function getRecords($tablename)
    {
        $qr ="SELECT * FROM $tablename";
        return mysqli_query($this->con,$qr);
    }
    public function getRecordsbyField($tblname,$field,$keyword){
        $sql ="SELECT * FROM $tblname where $field = '$keyword' ";
        return mysqli_query($this->con,$sql);
    }
}
?>