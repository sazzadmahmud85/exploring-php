<?php
$filename = "c:\mastering-php/7-files/files/data/text.txt";
$fp = fopen($filename, 'r+');
$line = fgets($fp);
echo $line;
fwrite($fp, "Uranus\n");
$line = fgets($fp);
echo $line;
fseek($fp, 0); //rewind($fp, 0);
fclose($fp);