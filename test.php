<?php 
$x = rand(807,57898);
$Code = rand(9999,999999);
$CodeFinal = str_shuffle($x*$Code);


echo substr($CodeFinal, 3)."\n";


