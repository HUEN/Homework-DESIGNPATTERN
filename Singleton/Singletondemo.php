<?php 
include 'Homework-Singleton.php';
$a=Singleton::getInstance();
$b=Singleton::getInstance();
if($a=$b)
{ 
echo "Singleton";
}