<?php
echo time()."\n";
echo mktime(0,0,0,12,1,2018)."\n";
date_default_timezone_set('Asia/Dhaka');
echo mktime(0,0,0,12,1,2018)."\n";
echo gmmktime(0,0,0,12,1,2018)."\n";
echo (22400-800)/3600;