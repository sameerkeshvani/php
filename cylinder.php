<?php
define('PI','3.14');
interface calculation
{
 function area();
 function volume();
}
class cylinder implements calculation
{
 var $r,$h;
 function area($ra,$hi)
 {
    $this->r=$ra;
    $this->h=$hi;
    return (2*PI*$this->r*$this->h)+(2*PI*$this->r*$this->r);
 }
 function volume()
 {
    return PI*$this->r*$this->r*$this->h;
 }
}
$obj = new cylinder(2,2);
$obj->area();
$obj->volume();
 ?>