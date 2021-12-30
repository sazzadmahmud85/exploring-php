<?php
$filename = "c:\mastering-php/7-files/files/data/text3.txt";

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

// $encodedeData = json_encode($students);
// file_put_contents($filename, $encodedeData, LOCK_EX);

$data = file_get_contents($filename);
$allStudents = json_decode($data,true);
print_r($allStudents);

echo $allStudents[0]['fname'];