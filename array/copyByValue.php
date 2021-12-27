<?php
$person = array ('fname'=>'Hello', 'lname' => 'World');
// copy by value or deep copy
// $newPerson = &$person;
// $newPerson['lname'] = 'Pluto';

/* 
print_r($person);
print_r($newPerson); 
*/

//copy by reference or shalow copy
// $newPerson = &$person;
// $newPerson['lname'] = 'Pluto';

/* 
print_r($person);
print_r($newPerson);
 */

 function printData(&$person){
     $person['fname'] .= " Changed";
     print_r($person);
 }

 printData($person);
 print_r($person);