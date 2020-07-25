<?php

//-------1~10までの和------------

$a = 1;
$b = 10;
$c = 0;

$ss = tasu($a,$b,$c);

    echo $ss . "\n";

function tasu($a,$b,$c) {

    for ($i = $a; $i < $b; $i++) {
        $c += $i;
    }

    return $c;
}

//-------20~100までの和------------

$a = 21;
$b = 100;
$c = 0;

$ss = tasu($a,$b,$c);

    echo $ss;


/*----------修正前---------------
function kake($a,$b,$c){

    for($i = $a; $i < $b; $i++){
        $c += $i;
    }

    return $a . $b . $c;
}

$total = kake(1,11,0);

echo $total;
-------------------------------*/

 ?>
