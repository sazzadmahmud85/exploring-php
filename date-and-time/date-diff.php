<?php
$d1 = new DateTime('20 May 2007');
$d2 = new DateTime('27 July 2013');

// $difference = date_diff($d1, $d2);
$difference = $d1 -> diff($d2); // same
echo $difference->format('%y Year %M Month %D Days');