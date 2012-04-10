<?php
include "Factory.php";
include "carp.php";
include "catfish.php";

$factory = factory::aquarium("carp");
echo $factory->info();
$factory2= new factory();
echo $factory2->aquatium("catfish")->info();
?>