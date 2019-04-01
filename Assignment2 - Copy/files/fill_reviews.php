<?php 

// The function states that for every instance of $film['review'] (a review) assigned in the movie array it should be echoed out.
// Red horizontal rules are used to accent the content and make divisions between reviews apparent.
$csv2 = array_map('str_getcsv', file('review.csv'));

if (isset($_GET['id'])) {

    $reviews = $_GET['id'];

    $review = $csv2[$reviews];
}

function loadReviews($review) {
    foreach($review as $key => $value) {
        echo '<div class="col-lg-6 col-sm-12">
        <hr>
        <p>
            '.$value.'
        </p>
        <hr>
    </div>';
        }
}

?>