<?php
$name= "Rakib";

$string01 = "my name is $name \n";
echo $string01;

$heredoc = <<<EOD
data 1
new line {$name} \n
more text
EOD;
echo $heredoc;
?>