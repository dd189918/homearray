<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 09.10.2016
 * Time: 17:41
 */


$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$stroka = '';
foreach ($arr as $elem)
{
$stroka .= ''.$elem;
}
echo $stroka.'';
echo "<br>";

for ($i=0; $i<=9; $i++)
{                                     //слияния массива с помощу цыкла
    echo $arr[$i]. '';
}
echo "<br>";
$i = 0;
while ($i <= 9):
    echo $arr[$i]. '';
    $i++;
endwhile;
echo "<br>";
$i=0;
while ($i<=9)
{
    echo $arr[$i]. '';
    $i++;
}
?>


