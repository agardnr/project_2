<?php

error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)

// Array of pages to scrape words from
$sites = array('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html',
'http://www.paulnoll.com/Books/Clear-English/words-03-04-hundred.html',
'http://www.paulnoll.com/Books/Clear-English/words-29-30-hundred.html');

$matches = array();
$words = array();

foreach ($sites as $site) {
$site = file_get_contents($site);

// extract words from site
preg_match_all("'<li>(.*?)</li>'si", $site, $matches);

    foreach($matches[1] as $match)
    {
    $trim= trim($match);

// Place contents into $words array
    array_push($words, $trim);

    }

}

print_r($words);

// Output to csv file
$file = fopen("words.csv","w");

fputcsv($file,$words,',');

fclose($file);


 ?>
