<?php
class calculator
{
    var $a1,$b1,$add,$subtract,$division,$multiply;
    function add($a,$b)
    {
        $this->a1=$a;
        $this->b1=$b;
        $add = $this->a1+$this->b1;
        echo "Addition = $add<br>";
    }
    function subtract($a,$b)
    {
        $this->a1=$a;
        $this->b1=$b;
        $subtract = $this->a1-$this->b1;
        echo "Subtraction = $subtract<br>";
    }
    function multiply($a,$b)
    {
        $this->a1=$a;
        $this->b1=$b;
        $multiply = $this->a1*$this->b1;
        echo "Multiplication = $multiply<br>";
    }
    function division($a,$b)
    {
        $this->a1=$a;
        $this->b1=$b;
        $division = $this->a1/$this->b1;
        echo "Division = $division<br>";
    }
}
$a=$_POST['a'];
$b=$_POST['b'];
echo "1st Number = $a";
echo "<br>2nd Number = $b<br>";
$c1 = new calculator;
$c1->add($a,$b);
$c1->subtract($a,$b);
$c1->multiply($a,$b);
$c1->division($a,$b);
?>