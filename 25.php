<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 09.10.2016
 * Time: 20:51
 */

#  Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти
#  максимальное и минимальное значение и поменять их местами.
$min = rand(10, 55);
$max = rand(56, 100);
$a = range($min, $max);
foreach($a as $el) {
    if($el >= $max) {
        echo "Максимальное чило массива - " . $el;
        echo "<br>";
        $b = $max;
    }
    elseif($el <= $min) {
        echo "Минимальное число массива - " . $el;
        echo "<br>";
        $c = $min;
    }
    else continue;
}
echo "Поменяли местами максимум - " . $c . "<br>" . "минимум - " . $b;
