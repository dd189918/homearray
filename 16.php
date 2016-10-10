<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 09.10.2016
 * Time: 19:44
 */

	$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	$i = 0;
	$str = '';
	foreach ($arr as $elem)
    {
        if ($i == 3 or $i == 6 or $i == 9)
        {
            $str .= $elem.', ';
        }
        else
        {
            $str .= $elem.'<br>';
        }
    }
	echo $str;
?>