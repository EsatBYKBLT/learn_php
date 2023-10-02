<?php
class Base{
    var $num=3.15;
}
class Derived extends Base{}

$d = new Derived();
echo $d->num;
?>