<?php
// Asia Dhaka Time
date_default_timezone_set("Asia/Dhaka");
echo date('d/m/y')."\n";
echo date('d/m/Y')."\n";
echo date('d/F/y')."\n";
echo date('dS F, Y')."\n";
echo date('d F, Y h:i:s')."\n"; // his gmt time
echo date('d F, Y H:i:s a')."\n"; // 24 hour time
echo date('d F, Y H:i:s A')."\n"; // 24 hour time

echo date('z');
echo PHP_EOL;
echo date('t');
