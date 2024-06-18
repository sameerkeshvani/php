<?php
class distance
{
    var $feet, $inches, $opt;
    function convert_feet_to_inch()
    {
        $feet=$_POST['feet'];
        $inches=$feet*12;
        echo "$feet feet in inch is $inches";
    }
    function convert_inch_to_feet()
    {
        $inches=$_POST['inch'];
        $feet=$inches/12;
        echo "$inches inch in feet is $feet";
    }
}
$feet = new distance;
$opt=$_POST['temp'];
switch($opt)
{
    case 1: $feet->convert_feet_to_inch();
            break;
    case 2: $feet->convert_inch_to_feet();
            break;
}
?>