<?php

/*
$file="movie.csv";
$f = fopen($file, "r");
while ($record = fgetcsv($f)) {
    foreach($record as $field) {
        echo $field . "<br/>";
    }
}
fclose($f);

*/

$csv = array_map('str_getcsv', file('movie.csv'));

var_dump($csv[3][0]);

?>