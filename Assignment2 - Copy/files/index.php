<?php

    include('fill_table.php'); // PHP code in the fill_table file is pulled into the index page.
    include('movies_array.php'); // PHP code in the movies_array file is pulled into the index page.

?>

<?php include('header.php'); ?> <!-- Header information is generated here from PHP file. -->

<div class="jumbotron jumbotron-fluid">
    <div class="horrorIcon">            <!-- Jumbotron and title area - beginning of index body -->
        <div class="container" id="movieBanner">
            <div class="row align-items-center text-center justify-content-center">
                <h1 class="display-4 col-sm-12" id="jumboTitle">TOP HORROR MOVIES</h1>
            </div>
            <div class="row align-items-center text-center justify-content-center">
                <p class="lead col-sm-12 text-center" id="jumboHeader">2019</p>
            </div>
        </div>
    </div>
    <div class="container tableContainer"> <!-- Beginning of table structure for the array to be loaded into. -->
        <table class="table table-hover table-dark">
            <thead class="thead-dark">
                <tr id="tableHead">
                    <th class="headText" scope="col">Rank</th>
                    <th class="headText" scope="col"> </th>
                    <th class="headText" scope="col">Movie Title</th>
                    <th class="headText" scope="col">Release Date</th>
                    <th class="headText" scope="col">Running Time</th>
                    <th class="headText" scope="col">IMDB Rating</th>
                </tr>
            </thead>

            <?php fillTable($csv); ?> <!-- Calling the function from the fill_table PHP file loaded previously. Does as stated. -->

        </table>
        <button class="btn addMovie"><a href="data_form.php">Add A Movie</a></button>
    </div>
    
    <?php include('footer.php'); ?> <!-- Footer information is generated here from PHP file. -->