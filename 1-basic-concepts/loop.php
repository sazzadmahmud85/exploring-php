<?php
for ($i = 1; $i < 10; $i++){
    // echo $i;
    echo PHP_EOL;
    for ($j = 0; $j < $i; $j++){
        echo "*";
    }
}
echo PHP_EOL;

$i = 0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
}

echo $i.PHP_EOL;
$i = 0;
do{
    $i++;
    echo $i.PHP_EOL;
}while($i<10);

echo "GO TO \n";
$i = 0;
a: $i++;
echo $i.PHP_EOL;
if($i < 10) goto a;