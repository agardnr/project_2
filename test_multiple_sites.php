<?php

error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)

//$site = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html');

$sites = array('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html',
'http://www.paulnoll.com/Books/Clear-English/words-03-04-hundred.html',
'http://www.paulnoll.com/Books/Clear-English/words-29-30-hundred.html');

$matches = array();
$words = array();

foreach ($sites as $site) {
$site = file_get_contents($site);
preg_match_all("'<li>(.*?)</li>'si", $site, $matches);

    foreach($matches[1] as $match)
    {
    $trim= trim($match);

    array_push($words, $trim);

    }

}

print_r($words);

// Output to csv file
/*--
$file = fopen("words.csv","w");

foreach ($words as $line) {
fputcsv($file,explode(',',$line));
}
fclose($file);
--*/



 ?>
