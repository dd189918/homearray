<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 09.10.2016
 * Time: 18:36
 */

	$arr = array(1, 4, 2, 5, 19, 13, 0, 10);
	$e = 4;
    $b = 2;
    $c = 3;
	foreach ($arr as $elem) {
        if ($elem == $e) {
            echo 'Есть!';
        }
        if ($elem == $b) {
            echo '<br>' . 'Есть!';
        }
        if ($elem == $c) {
            echo '<br>' . 'Есть!';
        }
    }
?>