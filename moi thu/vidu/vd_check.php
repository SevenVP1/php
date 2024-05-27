<!doctype html>
<html lang="en">
    <head>
        <style>
            .error {color:#FF0000;}
        </style>
    </head>
    <body>
    <?php
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            
        }
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(empty($_POST["name"])){
                    $nameErr = "Name is required";
                } else{
                    $name = test_input($_POST["name"]);
                }
                if(empty($_POST["email"])){
                    $emailErr = "email is requied";
                } else{
                    $email = test_input($_POST["email"]);
                }
                if(empty($_POST["web"])){
                    $websiteErr = "website is requied";
                } else{
                    $website = test_input($_POST["web"]);
                }
                if(empty($_POST["gioitinh"])){
                    $genderErr = "gender is requied";
                } else{
                    $gender = test_input($_POST["gioitinh"]);
                }
                $comment = test_input($_POST["comment"]);
                
            }
            
        //tên ko có khoảng trắng
        //email phai co @
        // website phai la url
        // gender chi chon 1
        // ten, email, gioi tinh buoc phai co 
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       <h1 style="text-align: center">PHP From Validation Example</h1>
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
        <span class="error">*<?php echo $nameErr;?></span>
        <small id="helpId" class="form-text text-muted"></small>
       </div>
       <div class="mb-3">
        <label for="" class="form-label">Email</label>
        
        <input
            type="email"
            class="form-control"
            name="email"
            id=""
            aria-describedby="emailHelpId"
            placeholder="abc@mail.com"
        />
        <span class="error">*<?php echo $emailErr;?></span>
        <small id="emailHelpId" class="form-text text-muted"
            ></small
        >
       </div>
       <div class="mb-3">
        <label for="" class="form-label">Website</label>
        <input
            type="text"
            class="form-control"
            name="web"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        <span class="error"><?php echo $websiteErr;?></span>
        <small id="helpId" class="form-text text-muted"></small>
       </div>
       <div class="mb-3">
        <label for="" class="form-label">Comment</label>
        <textarea class="form-control" name="comment" id="" rows="3"></textarea>
       </div>
       <div
        class="btn-group"
        role="group"
        aria-label="Basic checkbox toggle button group"
       >
       <label>Gender</label>
        <input
            type="radio"
            class="btn-check"
            name="gioitinh"
            id="btncheck1"
            autocomplete="off"
            value="Female"
        />
        <label
            class="btn btn-outline-primary"
            for="btncheck1"
            >Female</label
        >
       
        <input
            type="radio"
            class="btn-check"
            name="gioitinh"
            id="btncheck2"
            autocomplete="off"
            value="Male"
        />
        <label
            class="btn btn-outline-primary"
            for="btncheck2"
            >Male</label
        >
       
        <input
            type="radio"
            class="btn-check"
            name="gioitinh"
            id="btncheck3"
            autocomplete="off"
            value="Other"
        />
        <label
            class="btn btn-outline-primary"
            for="btncheck3"
            >other</label
        >
        <span class="error">*<?php echo $genderErr;?></span>
       </div>
       
       <button
        type="submit"
        class="btn btn-primary"             
       >
        Submit
       </button>
       <?php 
       echo "<br>";
       echo $name."<br>";
       echo $email."<br>";
       echo $website."<br>";
       echo $comment."<br>";
       echo $gender
       ?>
        
    </body>
</html>
