<?php 

            include('fill_details.php');  // PHP code in the fill_details file is pulled into the index page.
            include('fill_table.php');  // PHP code in the fill_table file is pulled into the index page.
            include('fill_reviews.php');  // PHP code in the fill_reviews file is pulled into the index page.
            include('delete_movie.php');  // PHP code in the fill_reviews file is pulled into the index page.
?>

<?php include('header.php'); ?> <!-- Header information is generated here from PHP file. -->
   

<div class="container-fluid" id="detailsWrapper">
<form method="POST" enctype="multipart/form-data">
<button class="btn addMovie"><a href="update_form.php?id=<?=$movie?>">Update</a></button>
<?= $error ?>;
</form>
<form method="POST" enctype="multipart/form-data">
<input class="btn addMovie" type="submit" name="delete" value="Delete" />
<?= $error ?>;
</form>
    <div class="row photoWrapper float-left">
        <div class="detailsPhoto">
            <img class="detailsPic" src="<?= $film[1] ?>" />
            <!-- Dynamically loading key => value for the movie image from a URL as opposed to an internal file. -->
        </div>
    </div>
    <div class="row detailsTop">
        <div class="col-lg-4 col-sm-12 detailsTitle"> <!-- Beginning of the details page content, to the right of the picture. -->
            <h2 id="detailsTitleText">
                <?= $film[2] ?>
            </h2>
        </div>
        <div class="col-lg-8 col-sm-12 detailsExtra">
            <p class="detailsEtc"> 
                <span class="redLine">|| </span>
                <?= $film[5] ?> <span class="redLine">|| </span>
                <?= $film[4] ?> <span class="redLine">|| </span>
                <?= $film[3] ?> <span class="redLine">|| </span>
            </p>
        </div>
        <div class="row detailsMiddle"> <!-- Middle part of the details page content, right under the title and to the right of the picture. -->
            <div class="col">
                <div class="detailsDirector">
                    <p><span id="directorHead">Director:</span>
                        <?= $film[8] ?> <!-- Echoes in director information from the movies_array file. -->
                    </p>
                </div>
                <div class="detailsWriters">
                    <p><span id="writersHead">Writers:</span>
                        <?= $film[9] ?> <!-- Echoes in writer information from the movies_array file. -->
                    </p>
                </div>
                <div class="detailsStars">
                    <p><span id="starsHead">Stars:</span>
                        <?= $film[10] ?> <!-- Echoes in starring role information from the movies_array file. -->
                    </p>
                </div>
                <div class="detailsSummary">
                    <p><span id="summaryHead">Summary: </span>
                        <?= $film[7] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row detailsTrailer">
        <div class="col">
            <p id="reviewsHeader">TRAILER</p> <!-- Beginning of the movie trailer section of the details page.-->
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <?= $film[11] ?>
        </div>
    </div>
    <div class="row detailsReviews">
        <div class="col">
            <p id="reviewsHeader">REVIEWS</p> <!-- Beginning of the reviews section of the details page.-->
        </div>
    </div>
    <div class="row reviewsLines">
        <?php loadReviews($review); ?> <!-- Calls the function created in the fill_details file to populate the reviews section. -->
    </div>
</div>

<?php include('footer.php'); ?> <!-- Footer information is generated here from PHP file. -->