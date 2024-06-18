<?php
$xml = simplexml_load_file("book.xml");
$bname = $_GET['bn'];
$head = array("Code", "Name", "Author", "Price");
foreach($xml->children() as $c)
{
    if($c->name == $bname)
    {
        echo "<table border='1'>";
        echo "<tr>";
        foreach($head as $h)
        {
            echo "<th>$h</th>";
        }
        echo "</tr>";
        {
            echo "<tr>";
            echo "<td>".$c['id']."</td>";
            echo "<td>".$c->name."</td>";
            echo "<td>".$c->author."</td>";
            echo "<td>".$c->price."</td>";
            echo "</tr>";
        }
    }
}
 ?>