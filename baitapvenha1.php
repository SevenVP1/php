<!doctype html>
<html lang="en">

    <body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <?php
        
        class product{
            public $Id;
            public $name;
            public $price;
            public $amount;
            public $company;
            public $year;
            function __construct($Id, $name, $price, $amount, $company, $year)
            {
                $this->Id = $Id;
                $this->name = $name;
                $this->price = $price;
                $this->amount = $amount;
                $this->company = $company;
                $this->year = $year;
            }
        }
        
        ?>
        <div class="mb-3">
            <label for="" class="form-label">Nhập tên sản phẩm 1</label>
            <input
                type="text"
                class="form-control"
                name="name[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
            <label for="" class="form-label">Nhập tên sản phẩm 2</label>
            <input
                type="text"
                class="form-control"
                name="name[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="" class="form-label">Nhập tên sản phẩm 3</label>
            <input
                type="text"
                class="form-control"
                name="name[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nhập giá sản phẩm 1</label>
            <input
                type="text"
                class="form-control"
                name="price[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="" class="form-label">Nhập giá sản phẩm 2</label>
            <input
                type="text"
                class="form-control"
                name="price[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="" class="form-label">Nhập giá sản phẩm 3</label>
            <input
                type="text"
                class="form-control"
                name="price[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nhập số lượng sản phẩm</label>
            <input
                type="text"
                class="form-control"
                name="amount[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="" class="form-label">Nhập số lượng sản phẩm</label>
            <input
                type="text"
                class="form-control"
                name="amount[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="" class="form-label">Nhập số lượng sản phẩm</label>
            <input
                type="text"
                class="form-control"
                name="amount[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Công Ty</label>
            <select
                class="form-select form-select-lg"
                name="company[]"
                id=""
            >
                <option selected>Select one</option>
                <option value="Delhi">Delhi</option>
                <option value="Istanbul">Istanbul</option>
                <option value="Jakarta">Jakarta</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="" class="form-label">Công Ty</label>
            <select
                class="form-select form-select-lg"
                name="company[]"
                id=""
            >
                <option selected>Select one</option>
                <option value="Delhi">Delhi</option>
                <option value="Istanbul">Istanbul</option>
                <option value="Jakarta">Jakarta</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="" class="form-label">Công Ty</label>
            <select
                class="form-select form-select-lg"
                name="company[]"
                id=""
            >
                <option selected>Select one</option>
                <option value="Delhi">Delhi</option>
                <option value="Istanbul">Istanbul</option>
                <option value="Jakarta">Jakarta</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nhập năm sản xuất</label>
            <input
                type="year"
                class="form-control"
                name="year[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="" class="form-label">Nhập năm sản xuất</label>
            <input
                type="year"
                class="form-control"
                name="year[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="" class="form-label">Nhập năm sản xuất</label>
            <input
                type="year"
                class="form-control"
                name="year[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
        </div>
        <button
            type="submit"
            class="btn btn-primary"
        >
            Submit
        </button>
        
        Các sản phẩm lần lượt là: <?php 
        if(isset($_POST["name"]) && !empty($_POST["name"]))   
        foreach($_POST["name"] as $name) 
            echo $name .", ";
        ?>
        <br>
        Giá <?php 
        if(isset($_POST["price"]) && !empty($_POST["price"]))   
        foreach($_POST["price"] as $price) 
            echo $price .", ";
        ?>
        <br>
        Số Lượng: <?php 
        if(isset($_POST["amount"]) && !empty($_POST["amount"]))   
        foreach($_POST["amount"] as $amount) 
            echo $amount .", ";
        ?>
        <br>
        Công Ty: <?php 
        if(isset($_POST["company"]) && !empty($_POST["company"]))   
        foreach($_POST["company"] as $company) 
            echo $company .", ";
        ?>
        <br>
        Năm sản xuất <?php 
        if(isset($_POST["year"]) && !empty($_POST["year"]))   
        foreach($_POST["year"] as $year) 
            echo $year .", ";
        ?>
                
    </body>
</html>
