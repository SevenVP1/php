<!doctype html>
<html lang="en">

    <body>
       welcome <?php
       echo $_POST["username"];       ?><br>
       Your city of Employment is: <?php echo $_POST["city"];?><br>
       Your websie is : <?php echo $_POST["web"];?><br>
       Your role is: <?php echo $_POST["role"]?><br>
       Your sign is: <?php if(isset($_POST["sign"]) && !empty($_POST["sign"]))   
                            foreach($_POST["sign"] as $sign) 
                                echo $sign ." ";
                            ?>
    </body>
</html>
