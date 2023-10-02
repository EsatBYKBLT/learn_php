<?php
$x = 5; $y = 5;

function f1(){ $x = 10;}
function f2(){ global $y; $y = 10;}

echo "global olmadan <br>";
echo $x . "<br>";
f1();
echo $x . "<br>";

echo "<br>globalle <br>";
echo $y . "<br>";
f2();
echo $y . "<br>";
?>