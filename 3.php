<pre>
<?php
$arr1=array(26, 17, 136, 12, 79,15);


foreach($arr1 as &$value) {
    $result = $result + $value*$value;
}
echo "sum = " . $result . "\n";
unset($value); // разорвать ссылку на последний элемент

function suma($arr){
    $sum=0;
    foreach($arr as &$elem) {
        $sum += $elem*$elem;
    }
    return $sum;
    unset($elem); // разорвать ссылку на последний элемент
}
echo "sum(arr1) = " . suma($arr1) . "\n";
?>
</pre>

