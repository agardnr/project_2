<?php
error_reporting(E_ALL); # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<?php

if(isset($_POST['submit'])){

    $submission = $_POST;

    $word_count   = '';
    $number_count = '';
    $password     = '';

    // Validation


    if(!ctype_digit($_POST['word_count'])) {
    $error = "The value must be a number.";
    $word_count = 0;
    $number_count = 0;
    return;
    }

    if(!ctype_digit($_POST['number_count'])) {
    $error = "The value must be a number.";
    $word_count = 0;
    $number_count = 0;
    return;
    }


    if($_POST['word_count'] < 2) {
    $error= "Value must be 2 or greater.";
    $word_count = 0;
    $number_count = 0;
    return;
    }

    if($_POST['number_count'] < 2) {
    $error= "Value must be 2 or greater.";
    $word_count = 0;
    $number_count = 0;
    return;
    }

    if($_POST['word_count'] > 9) {
    $error= "Value must not exceed 9 characters.";
    $word_count = 0;
    $number_count = 0;
    return;
    }

    if($_POST['number_count'] > 9) {
    $error= "Value must not exceed 9 characters.";
    $word_count = 0;
    $number_count = 0;
    return;
    }


    // Number of characters picked by user
    $word_count   = $_POST['word_count'];
    $number_count = $_POST['number_count'];
    $symbol_count = 4;

    if (isset($_POST['symbol_opt'])) {
        $symbol_opt = $_POST['symbol_opt'];
    } else {
        $symbol_opt = "";
    }

    // Arrays of words, numbers, and symbols
    $numbers = array(
        0,
        1,
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9
    );
    $symbols = array(
        '@',
        '#',
        '$',
        '%',
        '*'
    );

    // Word list from csv
    $file  = fopen("words.csv", "r");
    $words = fgetcsv($file);

    // Select random words, numbers, and symbols from array
    $rand_words   = array_rand($words, $word_count);
    $rand_numbers = array_rand($numbers, $number_count);
    $rand_symbols = array_rand($symbols, $symbol_count);

    // Array push to append selected to words $list array
    $list = array();
    for ($i = 0; $i < $word_count; $i++) {
        array_push($list, $words[$rand_words[$i]]);
    }

    // Append selected to numbers $list array using array_push
    for ($i = 0; $i < $number_count; $i++) {
        array_push($list, $numbers[$rand_numbers[$i]]);
    }

    // Append selected to symbols $list array using array_push
    if ($symbol_opt == 'yes') {
        for ($i = 0; $i < $symbol_count; $i++) {
            array_push($list, $symbols[$rand_symbols[$i]]);
        }
    }

    // Shuffle array
    shuffle($list);

    // Implode array
    $password = implode("", $list);
} else {
    $password = '';
}
?>
