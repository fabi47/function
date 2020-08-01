<?php

$min = 1;
$max = 10;

$min2 = 21;
$max2 = 100;

$fizz = 3;
$buzz = 5;
$fizzbuzz =　$fizz * $buzz;

class HomeWork{

//プロパティの宣言

    public $kake = "1~10までの積\n";

    public function kake($min, $max){
        $total = 1;

        for($i = $min; $i < $max; $i++){
            $total *= $i;
        }

            return $total . "\n";
    }


    public $tasu = "1~10までの和\n";

    public function tasu($min, $max){
        $c = 0;

        for ($i = $min; $i < $max; $i++){
            $c += $i;
        }

            return $c . "\n";
    }


   public $tasu2 = "21~100までの和\n";

    public function tasu2($min2, $max2){

        $c = 0;

        for($i = $min2; $i < $max2; $i++){
            $c += $i;
        }

            return $c . "\n";
    }
    

    public $fizzbuzzq = "fizzbuzz問題\n";

    public function fizzbuzz($fizz, $buzz, $fizzbuzz){

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

}

//インスタンスの生成
$homework = new HomeWork();

    echo $homework->kake;
    echo $homework->kake($min, $max);

    echo $homework->tasu;
    echo $homework->tasu($min, $max);

    echo $homework->tasu2;
    echo $homework->tasu2($min2, $max2);

    echo $homework->fizzbuzzq;
    echo $homework->fizzbuzz($fizz, $buzz, $fizzbuzz);

 ?>
