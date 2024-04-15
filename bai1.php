<!doctype html>
<html lang="en">

    <body>
      <?php
      /* $color ="red";
      $maunha = "lmao";
      $mauthuyen = " het cuu";
      echo "my car is ".$color."<br>";
      echo "my house is ".$maunha."<br>";
      echo "my boat is ".$mauthuyen."<br>";
      $txt = "Hanoi";
      echo "I love $txt <br>";
      echo " I love ".$txt."!<br>";
      $x =  5;
      $y = 4;
      echo $x +$y."<br>";
      var_dump(5);
      var_dump("john");
      var_dump(3.14);
      var_dump(true);
      var_dump([2,3,56]);
      var_dump(Null);
      $a = $b = $z = "hết cứu";
      echo "<br>".$a;
      echo "<br>".$b;
      echo "<br>".$z;
      function myTest(){
        global $a;
        echo "<p>Variable x inside function is : $a</p>";
        static $e = 0;
        echo $e;
        $e++;
      };
      myTest();
      echo "<p>Variable x ouside function is $x</p>";
      myTest();
      echo "<br>";
      myTest();
      echo "<br>";
      echo "<h2>PHP is fun! </h2>";
      echo "hello word <br>";
      echo "i'm about to learn PHP! <br>";
      echo "this","string","was","made","with multiple pramaeters";
      $x = "hello world";
      $y = 'love halong bay';
      var_dump($xx);
      echo "<br>";
      var_dump($yy);
      
      echo strlen("hello world")."<br>";
      echo str_word_count("hello world!")."<br>";
      echo strpos("hello world","hello")."<br>";

      $ten = "nguyen minh anh";
      echo strtoupper(str_replace("nguyen minh anh",$ten,"nguyen thanh an"));
      
      $x = " hello world ";
      $y = explode(" ", $x);
      print_r($y);
      
      $ten = "nguyen,an,ninh";
      $Ten = explode(",",$ten);
      echo $Ten[0]."<br>",$Ten[1]."<br>",$Ten[2];
      
      $ten = "nguyen thanh an";
      $lop = "khmtk6a";
      echo "xin chao '$ten' hoc \"$lop\""
      
      $x = 5985;
      var_dump(is_int($x));
      echo "<br>";
      $x =59.85;
      var_dump(is_int($x))
      
      $x = 1.9e411;
      var_dump($x);
      $x = acos(8);
      var_dump($x);
      define("chao","xin chao dai hoc ha long");
      echo chao
      
      $ho = " nguyen anh";
      $ten = " minh ";
      echo $ho.$ten
      
      $t = date("H");
      echo "<p> The hour (of the server) is ".$t;
      echo ", and will give the following message:</p>";
      if ($t<"10"){
       echo " Have a good morning";}
      elseif($t<"20"){
            echo "have a good day";
          }
      else{
            echo " have a good night";
          }
      $hoten = " Nguyen mai van";
        $gioitinh = "Nữ";
        $tuoi = 27;
         if ($tuoi< 18){
          echo "chao em $hoten";
         }
         elseif($tuoi<40){
          if($gioitinh=="Nam"){
          echo "chao anh $hoten";
         }
         elseif($gioitinh=="Nữ"){
          echo "chao chi $hoten";
         }
         }
         elseif($tuoi<60){
          echo "chao bac $hoten";
         }
         else{
          if($gioitinh=="Nam"){
          echo "chao ong $hoten";}
          if($gioitinh == "Nữ"){
            echo "chao ba $hoten";
          }
         } 
        
        $thang  = 12;
        switch ($thang) {
          case 1:
            echo "thang 1 co 31 ngay";
            break;
          case 2:
            echo " thang 2 co 28 ngay";
            break;
          case 3:
            echo "thang 3 co 31 ngay";
            break;
          case 4:
              echo "thang 4 co 30 ngay";
              break;
              case 5:
                echo "thang 5 co 31 ngay";
                break;
                case 6:
                  echo "thang 6 co 30 ngay";
                  break;
                  case 7:
                    echo "thang 7 co 31 ngay";
                    break;
                    case 8:
                      echo "thang 8 co 31 ngay";
                      break;
                      case 9:
                        echo "thang 9 co 30 ngay";
                        break;
                        case 10:
                          echo "thang 10 co 31 ngay";
                          break;
                          case 11:
                            echo "thang 11 co 30 ngay";
                            break;
                            case 12:
                              echo "thang 12 co 31 ngay";
                              break;

          }
         */  
        $sv = array("sv1","sv2","sv3","sv4","sv5","sv6","sv7","sv8","sv9","sv10");
        foreach($sv as $x){
          echo "$x <br>";
        }
        $sinhvien = array(
          "Name" => "xuanle",
          "Age" => " 22",
          "Email." => " xuanhangmaubqn@gmail.com",
          "Gender" => "male"
        );
        foreach($sinhvien as $key => $sinhvien){
          echo $key. ":". $sinhvien;
          echo "<br>";
        }
        
      ?>
    </body>
</html>
