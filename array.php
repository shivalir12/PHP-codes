<?php 
//Assosciative Array
$arr=array("1"=>1,"A"=>"One","Shivali"=>7,"Z"=>9);
unset ($arr[1]);
echo '<pre>';
print_r ($arr);
echo '</pre>'; 

$names=array('Shiv','Ranka','Pune');
$names[3]='India';
echo $names[2];

//Multidimensional Array
/*Students
Name Age Weight
Shiv 15  34
Anan 24  12
*/

$students=array(array('Shiv',15,34),array('Anan',24,12));
echo $students[0][0];
?>