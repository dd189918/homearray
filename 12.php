<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 09.10.2016
 * Time: 18:27
 */
	$num = 1000;
	$i = 0;
	while ($num > 50)
    {
        $i++;
        $num /= 2;
    }

	echo $i.'<br>'; // итераций
	echo $num; //число которое получилось

echo '<br>';
for ($num = 1000, $i = 0; $num > 50; $num /= 2, $i++);

echo $i.'<br>'; //итераций
echo $num; //число, которое получилось
?>
