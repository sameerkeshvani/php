<?php
$str = $_GET['q'];
$a = array("apple", "orange", "banana", "watermelon");
$match = "";
for($i=0;$i<count($a);$i++)
{
    if(strtolower($str)==strtolower(substr($a[$i],0,strlen($str))))
    {
        if($match=="")
        {
            $match=$a[$i];
        }
        else
        {
            $match = $match.",".$a[$i];
        }
    }
}
    if($match=="")
    {
        echo "No Suggestion";
    }
    else
    {
        echo $match;
    }
 ?>