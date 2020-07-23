<?php


function kake($a,$b,$c){

    for($i = $a; $i < $b; $i++){
        $c += $i;
    }

    return $a . $b . $c;
}

$total = kake(1,11,0);

echo $total;

 ?>
