<html>
<title>Palindrome Number</title>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
Enter a number<input type="number" name="n1"/><br/>
<input type="submit"/>
</form>
<?php
$num=$_POST["n1"];
$rev=strrev($num);
if($num==$rev)
{
    echo "$num is a palindrome number";
}
else
{
    echo "$num is not a palindrome number";
}
?>
</body>
</html>