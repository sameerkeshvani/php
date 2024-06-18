<?php
class shape
{
    public $dim1=10;
    public $dim2=20;
}
class rectangle extends shape
{
    function rectangle($d1,$d2)
    {
        $this->dim1=$d1;
        $this->dim2=$d2;
    }
    function area()
    {
        return $this->dim1*$this->dim2;
    }
}
$vars=get_class_vars(shape);
$methods=get_class_methods(rectangle);
$parent=get_parent_class(rectangle);
echo "Variables are<br>";
print_r($vars);
echo "<br>Methods are<br>";
print_r($methods);
echo "<br>Parent class is $parent<br>";
 ?>