<?php
$dom = new DOMDocument("1.0");
$bookstore = $dom->createelement("bookstore");
$dom->appendchild($bookstore);
$books = $dom->createelement("books");
$bookstore->appendchild($books);
$php = $dom->createelement("php");
$books->appendchild($php);
$title1 = $dom->createelement("title1","Programming PHP");
$php->appendchild($title1);
$publication = $dom->createelement("publication","O'Relly");
$php->appendchild($publication);
$price=$dom->createelement("price","800");
$php->appendchild($price);
$php = $dom->createelement("php");
$books->appendchild($php);
$title1 = $dom->createelement("title1","Beginners PHP");
$php->appendchild($title1);
$publication = $dom->createelement("publication","WROX");
$php->appendchild($publication);
$price=$dom->createelement("price","900");
$php->appendchild($price);
$dom->save("trial2.xml");
echo $dom->saveXML();
 ?>