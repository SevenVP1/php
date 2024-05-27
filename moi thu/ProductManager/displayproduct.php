<html>
    <body>
    <style>
        /* Table styles */
table {
    width: 100%;
    border-collapse: collapse;
  }
  
  th, td {
    padding: 8px;
    border: 1px solid #ddd;
  }
  
  th {
    background-color: #f2f2f2;
  }
  
  /* Text alignment */
  th.text-center,
  td.text-center {
    text-align: center;
  }
  
  th.text-right,
  td.text-right {
    text-align: right;
  }
  
  /* Alternating row colors */
  tr:nth-child(even) {
    background-color: #f9f9f9;
  }
  
  /* Hover effect */
  tr:hover {
    background-color: #f5f5f5;
  }

        </style>
        </body>
</html>
<?php 
require_once "dbprocess.php";
$pr = new DBproduct();
$pr->showproduct()
?>