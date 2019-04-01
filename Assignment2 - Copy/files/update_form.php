<?php 
 
$error = '';
$rank = '';
$poster = '';
$title = '';
$date = '';
$runtime = '';
$rating = '';
$letter_rating = '';
$summary = '';
$director = '';
$writer = '';
$stars = '';
$trailer = '';
$review = '';

$csv = array_map('str_getcsv', file('movie.csv'));

if (isset($_GET['id'])) {

    $movie = $_GET['id'];

    $film = $csv[$movie];

};

$line_to_delete = $film;

if(isset($_POST["submit"])) {

    if(empty($_POST["rank"])) {

        $error .= '<p>Please enter your rank!</p>';

    }
    else {
        $rank = $_POST["rank"];
    }

    if(empty($_POST["poster"])) {

        $error .= '<p>Please enter your poster!</p>';

    }
    else {
        $poster = $_POST["poster"];
    }

    if(empty($_POST["title"])) {

        $error .= '<p>Please enter your title!</p>';

    }
    else {
        $title = $_POST["title"];
    }

    if(empty($_POST["date"])) {

        $error .= '<p>Please enter a date!</p>';

    }
    else {
        $date = $_POST["date"];
    }

    if(empty($_POST["runtime"])) {

        $error .= '<p>Please enter a runtime!</p>';

    }
    else {
        $runtime = $_POST["runtime"];
    }

    if(empty($_POST["rating"])) {

        $error .= '<p>Please enter an average rating!</p>';

    }
    else {
        $rating = $_POST["rating"];
    }

    if(empty($_POST["letter_rating"])) {

        $error .= '<p>Please enter th rating for this film (G, PG, etc.)!</p>';

    }
    else {
        $letter_rating = $_POST["letter_rating"];
    }

    if(empty($_POST["summary"])) {

        $error .= '<p>Please enter a summary!</p>';

    }
    else {
        $summary = $_POST["summary"];
    }

    if(empty($_POST["director"])) {

        $error .= '<p>Please enter the director!</p>';

    }
    else {
        $director = $_POST["director"];
    }

    if(empty($_POST["writer"])) {

        $error .= '<p>Please enter the writer(s)!</p>';

    }
    else {
        $writer = $_POST["writer"];
    }

    if(empty($_POST["stars"])) {

        $error .= '<p>Please enter the billed stars!</p>';

    }
    else {
        $stars = $_POST["stars"];
    }

    if(empty($_POST["trailer"])) {

        $error .= '<p>Please enter the Youtube embed link of the movie trailer!</p>';

    }
    else {
        $trailer = $_POST["trailer"];
    }

    if(empty($_POST["review"])) {

        $error .= '<p>Please enter a review of the film!</p>';

    }
    else {
        $review = $_POST["review"];
    }

    if($error == '') {
        $line_counter = 0;
        $file = fopen("movie.csv", "r");
        $movie_data = array($rank, $poster, $title, $date, $runtime, $rating, $letter_rating, $summary, $director, $writer, $stars, $trailer);
        $comma_separated = implode(",",$movie_data);
        }
        while (!feof($file)){
            $data=[];
            $line = fgets($file);
            if($line_counter==$line_to_delete) implode(',',$movie_data); #inline if
            $line_counter++;
        }
        fclose($file);
        $file = fopen("movie.csv", "a+");
        fwrite($file, implode(",", $movie_data));
        fclose($file);
    }
//}

?>

<?php include('header.php'); ?>

<!-- Footer information is generated here from PHP file. -->
<div id="movieForm">
    <form method="POST" enctype="multipart/form-data">
        <h2 class="formHeader">Update A Movie</h2>
        <?= $error ?> <!-- ECHO out Error message, if applicable -->
        <div class="form-group formBody">
            <div class="row">
                <div class="col">
                    Rank: <input type="text" name="rank" class="form-control" placeholder="Enter data here..." /><br>
                </div>
                <div class="col">
                    Poster: <input type="text" name="poster" class="form-control"
                        placeholder="Enter data here..." /><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Title: <input type="text" name="title" class="form-control" placeholder="Enter data here..." /><br>
                </div>
                <div class="col">
                    Date: <input type="text" name="date" class="form-control" placeholder="Enter data here..." /><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Runtime: <input type="text" name="runtime" class="form-control"
                        placeholder="Enter data here..." /><br>
                </div>
                <div class="col">
                    Critic Rating: <input type="text" name="rating" class="form-control"
                        placeholder="Enter data here..." /><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Film Rating: <input type="text" name="letter_rating" class="form-control"
                        placeholder="Enter data here..." /><br>
                </div>
                <div class="col">
                    Stars: <input type="text" name="stars" class="form-control" placeholder="Enter data here..." /><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Director: <input type="text" name="director" class="form-control"
                        placeholder="Enter data here..." /><br>
                </div>
                <div class="col">
                    Writer: <input type="text" name="writer" class="form-control"
                        placeholder="Enter data here..." /><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Summary: <textarea name="summary" class="form-control" placeholder="Enter data here..."
                        rows="5"></textarea><br>
                </div>
                <div class="col">
                    Review: <textarea name="review" class="form-control" placeholder="Enter data here..."
                        rows="5"></textarea><br>
                </div>
            </div>
            Trailer: <input type="text" name="trailer" class="form-control" placeholder="Enter data here..." /><br>

            <input class="btn addMovie" type="submit" name="submit" value="Submit" />
        </div>
    </form>
</div>

<?php include('footer.php'); ?>
<!-- Footer information is generated here from PHP file. -->