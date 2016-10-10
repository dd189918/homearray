<pre>
<?php
$arr1=array(1, 20, 15, 24, 35);
echo "sum(arr1) = " . array_sum($arr1) . "\n";//cума массива с помощю array_sum

foreach($arr1 as &$value) {
    $result = $result + $value;
}
    echo "sum = " . $result . "\n";
unset($value); // разорвать ссылку на последний элемент
function suma($arr){
   $sum=0;
   foreach($arr as &$elem) {
       $sum += $elem;
   }
    return $sum;
    unset($elem); // разорвать ссылку на последний элемент
}
echo "sum(arr1) = " . suma($arr1) . "\n";
?>
</pre>

