<?php
// echo "hello world!";

// Variables

$x = 5;

// A variable starts with the $ sign, followed by the name of the variable
// A variable name must start with a letter or the underscore character
// A variable name cannot start with a number
// A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
// Variable names are case-sensitive ($age and $AGE are two different variables)




// Single line comments start with //
// Multi-line comments start with /* and end with */

// data types (int, float, string, boolean, array, object, null)
//

// $x = 5; // integer
// $y = 5.5; // float
// $name = "John"; // string
// $is_active = true; // boolean
// $fruits = array("apple", "banana", "orange"); // array
// $fruits = array("apple", "banana", "orange"); // array
// $z = null; // null

// echo gettype($x);

// echo $name;

// print_r($fruits);
// var_dump(($fruits)); // print the array with data types



// string conqatenation
// $name = "John";
// $age = 25;

// echo "my name is:" . $name . " and i am" . $age ."years old";
// echo "my naame is {$name} and i am {$age} years old"; // double quotes


// loop[for, while, do while, foreach]

// for($x = 0; $x<10; $x++){
//     echo $x.PHP_EOL;
// }

// $i =0;
// while($i<10){
//     echo $i;
//     $i++;
// }

// $i =0;
// do{
//     echo $i;
//     $i++;
// }while($i<10);

$fruits =["apple", "banana", "orange"];

// for($i = 0; $i<count($fruits); $i++){
//     echo $fruits[$i].PHP_EOL;
// }

// foreach($fruits as $key => $fruit){
//     echo $key ."=>".$fruit.PHP_EOL;
// }

// foreach($fruits as $fruit){
//     echo $fruit.PHP_EOL;
// }

// conditionals if, else, switch


?>