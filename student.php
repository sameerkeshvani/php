<?php
$xml = simplexml_load_file("student.xml");
$cname = $_POST['cname'];
echo "<table border='1' align='center'>";
$h = array("Roll No","Name","Address","College","Course");
foreach($h as $v)
{
    echo "<th>$v</th>";
}
foreach($xml->children() as $elements)
{
    if($elements->course==$cname)
    {
        echo "<tr><td>$elements->roll_no</td>";
        echo "<td>$elements->name</td>";
        echo "<td>$elements->address</td>";
        echo "<td>$elements->college</td>";
        echo "<td>$elements->course</td></tr>";
    }
}
echo "</table>";
 ?>