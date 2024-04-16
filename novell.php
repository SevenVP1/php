<!doctype html>
<html lang="en">

    <body>
       welcome <?php
       echo $_POST["username"];       ?><br>
       Your city of Employment is: <?php echo $_POST["city"];?><br>
       Your websie is : <?php echo $_POST["web"];?><br>
       Your role is: <?php echo $_POST["role"]?><br>
       Your sign is: <?php print_r($_POST["sign"])?>
    </body>
</html>
