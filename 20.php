<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 10.10.2016
 * Time: 20:23
 * 20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
 */
$stroka = '';
for ($i = 1; $i <= 20; $i++)
{
    $stroka .= 'x';
    echo $stroka.'<br>';
}
?>