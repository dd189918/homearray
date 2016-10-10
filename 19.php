<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 09.10.2016
 * Time: 20:23
 */
	$arr = array('Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс');
	$day = 7; //пусть сегодня второй день
	foreach ($arr as $key => $elem)
    {
        if ($key == $day - 1)
        {
            echo "<i>$elem</i><br>";
        }
        else
        {
            echo $elem.'<br>';
        }
    }
?>