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
$rectangle1= new rectangle(2,4);
$class=get_class($rectangle1);
echo "Class Of Object is $class";
$variables=get_object_vars($rectangle1);
echo "<br>Variables Of Object is/are<br>";
print_r($variables);
if(method_exists($rectangle1,area)==1)
{
    echo "<br>Found It";
}
else
{
    echo "<br>Not Found";
}
 ?>