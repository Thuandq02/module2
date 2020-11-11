<?php

include_once "StopWatch.php";

$stopwatch = new StopWatch();
$stopwatch->star();
$time1 = $stopwatch->getElapsedTime();
echo $time."<br>";
echo "start time: ".$stopwatch->getStartTime()."<br>";

$arr = [];
for ($i=0; $i <= 1000; $i++){
    array_push($arr,$i);
}
$new_arr = $stopwatch->selection_sort($arr);
$stopwatch->stop();
$time2 = $stopwatch->getElapsedTime();
print ("<pre>".print_r($stopwatch->mstoDate($time2 - $time1), true)."</pre>");
print ("<pre>".print_r($new_arr, true)."</pre>>");