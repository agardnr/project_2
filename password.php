<?php
//$password = "test";

//array of words
//array of numbers
//array of symbols

//grab randomly from each array
    //-use array_rand($array_name, num_words)
//add to array
//insert symbols and/or numbers into array
//shuffle array
//implode array into string

//import csv file
echo "Incoming:";
print_r($_POST);
echo "<br>";

// Number of characters picked by user. Replace with user input in phase 2
$word_count = 5;
$number_count = 5;
$symbol_opt = 'yes';
$symbol_count = 4;

// Arrays of words, numbers, and symbols
$numbers = array(0,1,2,3,4,5,6,7,8,9);
$symbols = array('@','#','$','%','*');

// Word list from csv
$file = fopen("words.csv","r");
$words=fgetcsv($file);

// Select random words, numbers, and symbols from array
$rand_words = array_rand($words, $word_count);
$rand_numbers = array_rand($numbers, $number_count);
$rand_symbols = array_rand($symbols, $symbol_count);

// Array push to append selected to words $list array
$list = array();
for ($i=0; $i<$word_count; $i++){
array_push($list, $words[$rand_words[$i]]);
}

// Append selected to numbers $list array using array_push
for ($i=0; $i<$number_count; $i++) {
array_push($list, $numbers[$rand_numbers[$i]]);
}

// Append selected to symbols $list array using array_push
if ($symbol_opt == 'yes' ) {
for($i=0; $i<$symbol_count; $i++) {
array_push($list, $symbols[$rand_symbols[$i]]);
}
}

// Shuffle array
shuffle($list);

// Implode array
$password = implode("",$list);

echo 'Password:';
print_r($password);




 ?>
