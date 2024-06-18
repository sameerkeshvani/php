<?php
$xml = new DOMDocument();
$xml->load("student.xml");
$x = $xml->documentElement();
foreach($x->childNodes as $item)
{
    print $item.nodename $item.nodevalues."<br>";
}
?>