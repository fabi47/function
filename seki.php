<?php

function kake($min, $max){

    $total = 1;

        for($i = $min; $i < $max; $i++){
            $total *= $i;
        }

        return $total;
}

echo kake(1, 10);

?>
