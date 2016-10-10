<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 09.10.2016
 * Time: 20:21
 */
$arr = array('Понеділок', 'Вівторок', 'Середа', 'Четверг', 'Пятниця', 'Субота', 'Неділя');
foreach ($arr as $key => $elem)
{
    if ($key == 5 or $key == 6)
    {
        echo "<b>$elem</b><br>";
    }
    else
    {
        echo $elem.'<br>';
    }
}
?>