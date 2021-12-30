<?php
$filename = "c:\mastering-php/7-files/files/data/text.txt";
// $existingData = file_get_contents($filename);
$fp = fopen($filename, 'a');
// fwrite($fp, $existingData);
fwrite($fp, "Data 11\n");
fwrite($fp, "Data 12\n");
fwrite($fp, "Data 13\n");

fclose($fp);