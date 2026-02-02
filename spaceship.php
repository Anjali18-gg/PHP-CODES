<?php

//comparing integers
echo 1<=> 1;   //output: 0
echo "<br>";
echo 1<=> 2;   //output: -1
echo "<br>";
echo 2<=> 1;   //output: 1
echo "<br>";

//comparing floats
echo 1.5 <=> 1.5;   //output: 0
echo "<br>";
echo 1.5 <=> 2.5;   //output: -1
echo "<br>";
echo 2.5 <=> 1.5;   //output: 1
echo "<br>";

//comparing strings
echo "x" <=> "x";   //output: 0
echo "<br>";
echo "x" <=> "y";   //output: -1
echo "<br>";
echo "y" <=> "x";   //output: 1
echo "<br>";

?>
