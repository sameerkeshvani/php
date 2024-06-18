<?php
abstract class calculation
{
    abstract function area();
    abstract function volume();
}
class circle extends calculation
{
    var $r;
    function circle($r1)
    {
        $this->r=$r1;
    }
    function area()
    {
        $area= 3.14 * $this->r * $this->r;
        echo "Area Of Circle = $area";
    }
    function volume()
    {
        $volume= (4/3) * 3.14 * $this->r * $this->r * $this->r;
        echo "Volume Of Circle = $volume";
    }
}
class rectangle extends calculation
{
    var $w,$l;
    function rectangle($w1, $l1, $h1)
    {
        $this->w=$w1;
        $this->l=$l1;
        $this->h=$h1;
    }
    function area()
    {
        $area=  $this->w * $this->l;
        echo "Area Of Rectangle = $area";
    }
    function volume()
    {
        $volume= $this->l * $this->w * $this->h;
        echo "Volume Of Rectangle = $volume";
    }
}
class cylinder extends calculation
{
    var $r, $h;
    function cylinder($r1,$h1)
    {
        $this->r=$r1;
        $this->h=$h1;
    }
    function area()
    {
        $area= (2 * 3.14 * $this->r * $this->h) + (2 * 3.14 * $this->r * $this->r * $this->r);
        echo "Area Of Cylinder = $area";
    }
    function volume()
    {
        $volume= 3.14 * $this->r * $this->r * $this->h;
        echo "Volume Of Cylinder = $volume";
    }
}
$c1 = new circle(5);
$c1->area();
echo "<br>";
$c1->volume();
echo "<br>";
$r1 = new rectangle(5,5,5);
$r1->area();
echo "<br>";
$r1->volume();
echo "<br>";
$cy1 = new cylinder(5,5);
$cy1->area();
echo "<br>";
$cy1->volume();
echo "<br>";
 ?>