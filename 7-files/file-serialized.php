<?php
$filename = "c:\mastering-php/7-files/files/data/text2.txt";

$students = array(
    array(
        'fname'=> 'Shahin',
        'lname'=> 'Ahmed',
        'age'=> 12,
        'class'=> 7,
        'roll'=> 11,
    ),
    array(
        'fname'=> 'Rahim',
        'lname'=> 'Ahmed',
        'age'=> 13,
        'class'=> 8,
        'roll'=> 12,
    ),
    array(
        'fname'=> 'Nikhil',
        'lname'=> 'Ahmed',
        'age'=> 145,
        'class'=> 9,
        'roll'=> 117,
    )
);

$student = array(
    'fname'=> 'Kamal',
    'lname'=> 'Ahmed',
    'age'=> 105,
    'class'=> 10,
    'roll'=> 17,
);

// $data = serialize($students);
// file_put_contents($filename, $data, LOCK_EX);

$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

// array_push($allStudents, $student);

// unset($allStudents[1]);
// $data = serialize($allStudents);
// file_put_contents($filename, $data, LOCK_EX);