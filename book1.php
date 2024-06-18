<?php
$xml = simplexml_load_file("book1.xml");
$h = array("Book Id","Book Name","Book Author","Published Year");
echo "<table border='1' align='center'>";
echo "<tr>";
foreach($h as $v)
{
    echo "<th>$v</th>";
}
echo "</tr>";
foreach($xml->children() as $e)
{
    echo"<tr><td>".$e['id']."</td>";
    echo"<td>$e->bname</td>";
    echo"<td>$e->author</td>";
    echo"<td>$e->year</td></tr>";
}
echo "</table>";
?>