<?php
$sno = $_GET['s11'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"student");
$q="select * from student where sno = ".$sno;
$sq=mysqli_query($con,$q);
echo "<table border='1' align='center'>";
while($r=mysqli_fetch_array($sq))
{
    echo"<tr>";
    echo "<td>".$r['sno']."</td>";
    echo"<td>".$r['sname']."</td>";
    echo"<td>".$r['standard']."</td>";
    echo"<td>".$r['marks']."</td></tr>";
}
 ?>