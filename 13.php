<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 09.10.2016
 * Time: 18:35
 *
  *Вывести таблицу умножения</p>
 */
for($i = 1; $i<=10; $i++)
{
    for($j=1;$j<=10;$j++)
    {
        echo "$i &times; $j =" .$i*$j."<br>";
    }
    echo "<br>";
}