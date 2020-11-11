<?php
$arr = [3, 5, 24, 5, 2, 4, 5, 6, 4];
$min = $arr[0];
for ($i = 0; $i < count($arr); $i++) {
    if ($min > $arr[$i]) {
        $min = $arr[$i];
    }
}
echo $min;