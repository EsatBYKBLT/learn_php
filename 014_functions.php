<?php
function fibonacci($num){
    if($num == 0) return 0;
    elseif($num == 1) return 1;
    else return fibonacci($num - 1) + fibonacci($num -2);
}

for ($i=0; $i <20 ; $i++) 
    echo $i . " -> " . fibonacci($i) . "<br>";

?>