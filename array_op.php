<?php
$x = array("a" => "Red", "b" => "Green", "c" => "Pink");
$y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");
$z = $x + $y;  
var_dump($z);
var_dump($x == $y); //outputs: boolean false
var_dump($x === $y); //outputs: boolean false
var_dump($x != $y);  //outputs: boolean true
var_dump($x <> $y); //outputs: boolean true 
var_dump($x !== $y);  //outputs: Boolean true
?>
