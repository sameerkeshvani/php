<?php
class student
{
    var $name, $city;
    function setdetails($n,$c)
    {
        $this->name=$n;
        $this->city=$c;
    }
    function getdetails()
    {
        echo $this->name." is from ".$this->city;
    }
}
$sameer=new student;
$sameer->setdetails("Sameer","Vapi");
echo $sameer->getdetails();
 ?>