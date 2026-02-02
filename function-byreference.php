<?php

function selfMultiply(&$number)
{
$number *= $number;
return $number;
}
$mynum = 5;
echo $mynum;   //outputs:- 5
echo "<br>";
selfMultiply($mynum);
echo $mynum;  //outputs:- 25
?>