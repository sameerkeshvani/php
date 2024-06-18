9<?php
abstract class drawing
{
 var $x;
 var $y;
 abstract function area();
}
class rectangle extends drawing
{
 function rectangle($a,$b)
 {
    $this->x=$a;
    $this->y=$b;
 }
 function area()
 {
    echo "Area Is ".$this->x*$this->y;
 }
}
$obj=new rectangle(10,20);
$obj->area();
 ?>