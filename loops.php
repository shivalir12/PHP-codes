<?php
$count=1;
do
{
	echo 'Php starts!'.$count.'<br>';
	$count++;
}while($count<1);

$grade='a';
switch($grade)
{
	case 'a':#stands for OR
	case 'A':
	echo "Excellent";
    break;
	
	case 'B':
	echo "Better";
	
	case 'C':
	echo "Good";
	
	case 'D':
	echo "Worse";
	
	default:
	echo "Not found";
}
?>