<?php 

// Both gets the id and assigns ito to its own variable, but also assigns the associated value nested below to the $film variable.
// This if isset code is mandatory for any of the information to dynamically load into the details page from the movies_array.php file.
$csv = array_map('str_getcsv', file('movie.csv'));


    if (isset($_GET['id'])) {

        $movie = $_GET['id'];

        $film = $csv[$movie];


    }

?>
