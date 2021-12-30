<?php
$filename = "c:\mastering-php/7-files/files/data/text.txt";
if (is_readable($filename)) {
    $fp = fopen($filename, "r");
    while ($line = fgets($fp)) {
        echo $line;
    }
    // rewind($fp);
    fseek($fp, 8);
    fseek($fp, -1, SEEK_END);
    while ($line = fgets($fp, 5)) {
        echo $line . "-";
    }
    fclose($fp);

    $data = file($filename);
    echo $data[2];
    print_r($data);

    echo PHP_EOL;

    $data = file_get_contents($filename);
    echo $data;
}
