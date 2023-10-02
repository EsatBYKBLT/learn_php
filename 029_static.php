<?php
class People{
    static $age=0;
    static function hi(){ echo "hello<br>";}
}

echo People::$age . "<br>";
People::hi();
?>