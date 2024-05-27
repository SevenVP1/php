<!doctype html>
<html lang="en">
    <head>
        <h1 style="text-align: center"> Xuanle</h1>
        <title>title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
    
    <?php
         function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        require_once "coreclass.php";
        $Id = $Name = $Company = $Color = $Amount = $Price =" ";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $Id = test_input($_POST["id"]);
            $Name = test_input($_POST["name"]);
            $Company = test_input($_POST["company"]);
            $Color = test_input($_POST["color"]);
            $Amount = test_input($_POST["amount"]);
            $Price = test_input($_POST["price"]);
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input
            type="number"
            class="form-control"
            name="id"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
       <div class="mb-3">
        <label for="" class="form-label">Company</label>
        <select
            class="form-select form-select-lg"
            name="company"
            id=""
        >
            <option selected>Choose a   Company</option>
            <option value="Delhi">Delhi</option>
            <option value="Istanbul">Istanbul</option>
            <option value="Jakarta">Jakarta</option>
        </select>
       </div>
       
       </div>
       <div class="mb-3">
        <label for="" class="form-label">Color</label>
        <select
            class="form-select form-select-lg"
            name="color"
            id=""
        >
            <option selected>Choose a Color</option>
            <option value="Red">Red</option>
            <option value="Blue">Blue</option>
            <option value="White">White</option>
            <option value="Black">Black</option>
        </select>
       </div>
       
       <div class="mb-3">
        <label for="" class="form-label">Amount</label>
        <input
            type="number"
            class="form-control"
            name="amount"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />

        <div class="mb-3">
        <label for="" class="form-label">Price</label>
        <input
            type="number"
            class="form-control"
            name="price"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
       </div>
       </div>
       
       <button
        type="sumbit"
        class="btn btn-primary"
       >
        Input
       </button>
       
        
        <?php
         $pr = new Product($Id, $Name, $Company, $Color, $Amount, $Price);
         echo $pr->toString();
         ?>
        
       
        
        
        
        
       </div>
       
    </body>
</html>
