<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 09.10.2016
 * Time: 16:06
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
print_r($arr);
echo "<br>";
foreach ($arr as $key=>$elem)
{
    $en[] = $key;
    $ru[] = $elem;
}
print_r($en);
echo "<br>";
print_r($ru);
?>