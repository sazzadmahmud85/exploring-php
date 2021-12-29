<?php
$students = array (
    "rahim",
    "karim",
    123,
    "monir"
);

$students[2] =  "shafiq";

$student = array_shift($students);
$student = array_shift($students);
$student = array_shift($students);

// $n = count($students);
// for($i = 0; $i < $n; $i++) {
//     echo $students[$i]."\n";
// }

$students[] = "Jamal";
array_push($students, "Kamal");
array_unshift($students, "Salam");
array_unshift($students, "Salma");

$n = count($students);
for($i = 0; $i < $n; $i++) {
    echo $students[$i]."\n";
}

/* 
    array_shift();
    array_unshift();
    array_push();
    array_pop(); 
*/