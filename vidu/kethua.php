<?php
// lớp cha
class Fruit{
    public $name;
    public $color;
    public function __construct($name, $color){
        $this->name =$name;
        $this->color = $color;
        
    }
    public function intro(){
        echo "The frist fruit is($this->name) and the color is ($this->color)";
    }
        
    
}
class Strawberry extends Fruit{
    public function message(){
        echo " Am I a fruit or a berry";
    }

}
$Strawberry = new Strawberry("Strawberry","red");
$Strawberry->message();
$Strawberry->intro();
?>