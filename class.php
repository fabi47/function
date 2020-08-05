<?php

$min = 1;
$max = 10;

$min2 = 21;
$max2 = 100;

$fizz = 3;
$buzz = 5;

class HomeWork {

//プロパティの宣言

    public $kake = "1~10までの積\n";

    public function kake($min, $max) {
        $total = 1;

        for($i = $min; $i < $max; $i++) {
            $total *= $i;
        }

            return $total . "\n";
    }


    public $tasu = "1~10までの和\n";

    public function tasu($min, $max) {
        $c = 0;

        for ($i = $min; $i < $max; $i++) {
            $c += $i;
        }

            return $c . "\n";
    }


    public $tasu2 = "21~100までの和\n";
    
        
    public $fizzbuzz = "fizzbuzz問題\n";

    public function fizzbuzz($fizz, $buzz) {

        $fizzbuzz = $fizz * $buzz;
        $result = array();

        for ($i = 1; $i < 100; $i++) {

            if($i % $fizzbuzz === 0) {
                $result[$i] = 'FizzBuzz';
            }elseif ($i % $fizz === 0) {
                $result[$i] = 'Fizz';
            }elseif ($i % $buzz === 0) {
                $result[$i] = 'Buzz';
            }else {
                $result[$i] = $i;
            }
        }

        foreach($result as $value) {
            echo $value;
        }

        return $result;
    }


}

//インスタンスの生成
$homework = new HomeWork();

    echo $homework->kake;
    echo $homework->kake($min, $max);

    echo $homework->tasu;
    echo $homework->tasu($min, $max);

    echo $homework->tasu2;
    echo $homework->tasu($min2, $max2);

    echo $homework->fizzbuzz;
    echo $homework->fizzbuzz($fizz, $buzz);

 ?>
