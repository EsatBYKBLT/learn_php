<?php
$connection = mysqli_connect('localhost','root','','loginapp');
$user="pa\rhu\te8340\n/14";

echo $user; echo "<br>";
$user = mysqli_real_escape_string($connection,$user);
echo $user;
