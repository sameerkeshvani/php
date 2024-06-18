<?php
$root = simplexml_load_file("student.xml");
$emp = $root->addchild('emp');
$e1 = $emp->addchild("e1");
$e1->addattribute("id",102);
$e1->addchild("Name","Vijay");
$e1->addchild("Salary",20000);
echo $e1->asxml("student.xml");
echo $e1->asxml();
echo $root->savexml();
 ?>