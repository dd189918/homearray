<pre>
<?php
$arr1=array(html, css, php, js, jq);
foreach($arr1 as &$value){
    echo "{$value} <br>";
}
unset($value); // разорвать ссылку на последний элемент
?>
</pre>