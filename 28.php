<table  border="1"><tr>
<?php
for ($i=1;$i<=10;$i++) {
    echo "<td>";
    for ($j=1;$j<=10;$j++) {
        echo $j.'&times;'.$j.'='.($i*$j).'<br>';
       }
echo "</td>";
}
?>
</tr></table>