<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 09.10.2016
 * Time: 20:50
 */
# Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть
# выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745
# встречается 4 раза
$i = 0;
$b = is_numeric($_GET['a']);
$f = is_numeric($_GET['f']);
if($b && $f == true) {
    echo "Введенное число - " . $a = $_GET['a'];
    echo "<br>";
    echo "Введенная цифра для поиска - " . $d = $_GET['f'];
    echo "<br>";
    $arr = str_split($a);
    foreach($arr as $el) {

        if($el == $d) {$i = $i + 1;}
        else
            continue;
    }
    echo "Цифра " . $d . " встречается " . " $i " . "раз(а)";
}
else
    echo "Это не число";
?>