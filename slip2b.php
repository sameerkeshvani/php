<?php
$xml = new DOMDocument();
$xml->load("slip1b.xml");
$x = $xml->savexml();
print $x;
print $xml->save("slip2b.docs");
 ?>