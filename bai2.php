<<!doctype html>
<html lang="en">

    <body>
      <?php
      /*
      function familyName($fname){
        echo "$fname Resfsnes.<br>";
      }
      familyName("Jani");
      familyName("hege");
      familyName("Stale");
      familyName("Kai Jim");
      familyName("Borge");
      
      function add_five(&$value){
        $value +=5;
      }
      $num = 2;
      add_five($num);
      echo $num
      */
      function sumMynumber(...$x){
        $n = 0;
        $len = count($x);
        for ($i = 0; $i < $len; $i++){
            $n += $x[$i];
        }
        return $n;
      }
      $a = sumMynumber(5,2,6,2,7,7);
      echo $a
      ?>
    </body>
</html>
