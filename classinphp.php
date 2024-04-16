<!doctype html>
<html lang="en">
    <body>
       <?php
       class fruit{
        public $name;
        public $color;
        //hàm tạo thay thế cho set, get
        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        function set_name($name){
            $this -> name = $name;

        }
        function get_name(){
            return $this ->name;
        }
        function set_color($color){
            $this -> color = $color;
        }
        function get_color(){
            return $this -> color;
        }
       }
       $lemon = new fruit("Lemon","green");
       $apple = new fruit("Apple", "red");
       $apple->set_name("Apple");
       $lemon->set_name("Lemon");
       echo "The first fruit is: ". $lemon->get_name();
       echo "<br>";
       echo "The second fruit is: ".$apple->get_name();
       echo "<br>";
       var_dump($apple instanceof fruit);
       
       ?>
    </body>
</html>
