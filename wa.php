<?php

$a = 1;
$b = 11;
$total = 0;

$aaa = wa($a,$b,$total);

function wa($a,$b,$total){
    return $total;
}

for($i = $a;$i < $b;$i++){
    $total += $i;
}

echo $total . "\n";
    

//21~100までの和

$c = 22;
$d = 101;

$sss = wawa($c,$d,$total);

function wawa($c,$d,$total){
    return $total;
}

for($i = $c;$i < $d;$i++){
    $total += $i;
}

    echo $total . "\n";


 ?>
