<?php

function fizzbuzz($fizz, $buzz, $fizzbuzz){

    for ($i = 1; $i < 100; $i++){

        if($i != 1){
          echo ".";
        }
        
        if($i % $fizzbuzz === 0){
            echo 'FizzBuzz';
        }elseif ($i % $fizz === 0){
            echo 'Fizz';
        }elseif ($i % $buzz === 0){
            echo 'Buzz';
        }else{
          echo $i;
        }
    }

}

fizzbuzz(3, 5, 15);

 ?>
