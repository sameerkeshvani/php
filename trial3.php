<?php
$doc = new DOMDocument();
$doc->load("trial2.xml");
$x = $doc->documentElement;
foreach($x->childNodes as $child)
{
    foreach($childNodes as $s)
    {
        echo "$s->nodeName<br>$s->nodeValue";
    }
}
 ?>