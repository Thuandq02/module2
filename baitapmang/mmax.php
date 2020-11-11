<?php
$arr = array(
  array(13,4,5,3,5,2,4,5),
  array(2,4,4,5,5,5,3,2),
  array(44,2,4,32,1,3,4,5)
);
$max=$arr[0][0];
for ($i=0; $i<count($arr); $i++){
    for ($j=0; $j<count($arr[$i]); $j++){
        if ($max<$arr[$i][$j]){
            $max=$arr[$i][$j];
        }
    }
}
echo $max;
