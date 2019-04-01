<?php

// This is the function I used to populate my table on the index page.  Must be included for the information to be generated.

$csv = array_map('str_getcsv', file('movie.csv'));



    function fillTable($csv) {
            foreach($csv as $key => $movie) {
                echo '<tr><td id="rankText"><div class="circle"></div>'.$movie[0].'</td><td class="imgWrapper"><img src="'.$movie[1].'"/><a href="details.php?id='.$key.'"/><p class="detailsPlus">+</p></a></td><td>'.$movie[2].'</td><td>'.$movie[3].'</td><td>'.$movie[4].'</td><td id="movieRatings">'.$movie[5].'</td></tr>';
            }
        }
?>