<?php
class information
{
    var $name, $age, $occupation, $salary;
    function information($name1,$age1,$occupation1,$salary1)
    {
        $this->name=$name1;
        $this->age=$age1;
        $this->occupation=$occupation1;
        $this->salary=$salary1;
    }
    function display()
    {
        echo "Name : $this->name<br>";
        echo "Age : $this->age<br>";
        echo "Occupation : $this->occupation<br>";
        echo "Salary : $this->salary<br>";
    }
}
$i1 = new information("Sameer","25","Manager",50000);
$i1->display();
//$gdc = get_declared_classes($il);
$gcm = get_class_methods('information');
$gcv = get_class_vars('information');
print_r($gdc = get_declared_classes());
echo "<br>";
print_r($gcm);
echo"<br>";
print_r($gcv);
 ?>