<?php  ?><?php
$xml = simplexml_load_file("slip5b.xml");
$sname = $_GET['s11'];
echo "<table border='1' align='center'>";
$h = array("Student No.","Name","Standar","Marks","Percentage");
foreach($h as $v)
{
    echo "<th>$v</th>";
}
foreach($xml->children() as $elements)
{
    if($elements->sno==$sname)
    {
        echo "<tr><td>$elements->sno</td>";
        echo "<td>$elements->sname</td>";
        echo "<td>$elements->standard</td>";
        echo "<td>$elements->marks</td>";
        echo "<td>$elements->percentage</td></tr>";
    }
}
echo "</table>";
 ?>