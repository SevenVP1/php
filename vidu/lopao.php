<?php
/*abstract class cha{
    abstract public function somemethod1();
    abstract public function somemethod2($name, $color);
    abstract public function somemethod3(): string;
}
*/
abstract class ParenClass{
    abstract protected function prefixName($Name);
}
class ChildClass extends ParenClass{
    public function prefixName($Name){
        if ($Name == "John Doe"){
            $prefix = "Mr.";
        }elseif($Name=="Jane Doe"){
            $prefix = "Mrs.";
        }else{
            $prefix="";
        }
        return "{$prefix}{$Name}";

    }
}
$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>