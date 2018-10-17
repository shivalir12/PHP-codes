<?php 
session_start();
$name=$_SESSION['Name']='Shiv';//setting session variables
$age=$_SESSION['Age']=20;
$weight=$_SESSION['Weight']=50;
echo $name.'<br>';
echo $age.'<br>';
echo $weight.'<br>';
?>