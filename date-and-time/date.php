<?php
$mt =  microtime(true);
// printf("%10.18f", $mt);

// unix epoch
// unix timestamp

$startTime = microtime(true);
factorial(1000);
sleep(2);
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
printf("%10.8f", $executionTime);

function factorial($n) {
    $result = 1;
    for($i = 1; $i <= $n; $i++){
        $result = $i;
    }
    return $result;
}

