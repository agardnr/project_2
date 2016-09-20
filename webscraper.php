<?php
$site = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html');

preg_match_all("'<li>(.*?)</li>'si", $site, $matches);


$words = array();

    foreach($matches[1] as $match)
    {
    $trim= trim($match);

    array_push($words, $trim);

    }

print_r($words);

// Output to csv file

$file = fopen("words.csv","w");

foreach ($words as $line) {
fputcsv($file,explode(',',$line));
}
fclose($file);




 ?>
