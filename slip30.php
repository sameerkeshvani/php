<?php
interface shape
{
    public function cal_area();
}
class square implements shape
{
    var $side;
    function square($side1)
    {
        $this->side=$side1;
    }
    function cal_area()
    {
        echo "Area Of Square = ".$this->side*$this->side;
    }
}
class rectangle extends square implements shape
{
    var $l,$b;
    function rectangle($l1,$b1)
    {
        $this->l=$l1;
        $this->b=$b1;
    }
    function cal_area()
    {
        echo "Area Of Rectangle = ".$this->l*$this->b;
    }
}
class triangle implements shape
{
    var $l,$b;
    function triangle($l1,$b1)
    {
        $this->l=$l1;
        $this->b=$b1;
    }
    function cal_area()
    {
        echo "Area Of Triangle = ". 2 * ($this->l+$this->b);
    }
}
$objs = new square(5);
$objs->cal_area();
$objr = new rectangle(5,5);
$objr->cal_area();
$objt = new triangle(5,5);
$objt->cal_area();
?>