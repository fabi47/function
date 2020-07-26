<?php

function kake($min, $max){

    for($i = $min; $i < $max; $i++){
        for($s = $min; $s < $max; $s++){

            echo "$i" . "x" . "$s" . "=" . $i * $s . ".";
        }
    }

}

kake(1, 10);

 ?>
