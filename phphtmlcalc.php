<?php
$num1=intval($_GET['num1']);
$num2=intval($_GET['num2']);
$operator=$_GET['op'];
echo "The Result is = ";
if($operator=='+')
	echo($num1+$num2);
elseif ($operator=='-')
{
	if($num1>$num2)
		echo($num1-$num2);
	else
		echo($num2-$num1);
}
elseif ($operator=='*')
	echo($num1*$num2);
elseif($operator=='/')
	{
	if($num1>$num2)
		echo($num1/$num2);
	else
		echo($num2/$num1);
}
else
echo "Please Enter a Valid Operation";
?>
