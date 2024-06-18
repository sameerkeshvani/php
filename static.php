<?php
class student
{
    static $name, $city;
    static function setdetails($n,$c)
    {
        self::$name=$n;
        self::$city=$c;
    }
    static function getdetails()
    {
        echo self::$name." is from ".self::$city;
    }
}
student::setdetails("Sameer","Vapi");
student::getdetails();
 ?>