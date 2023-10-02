<?php

class MyClass{
    function __construct() {
        echo "it is work <br>";
    }
    function __destruct() {
        echo "Destroying <br>";
    }
}

for ($i=0; $i <3 ; $i++) { 
    new MyClass();
}