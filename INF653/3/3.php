<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Star Wars: Episode IX | Coming December 2019</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CINEMATE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarContent" aria-controls="navbarContent"
            aria-expanded="false" aria-label="Toggle navigation.">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">FILMS <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container" id="movieBanner">
            <div class="row align-items-center text-center justify-content-center">
                <h1 class="display-4 col-sm-12">Star Wars: Episode IX</h1>
            </div>
            <div class="row align-items-center text-center justify-content-center">
                <p class="lead col-sm-12 text-center">2019</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 id="mainCast">
            MAIN CAST
        </h1>
        <?php
        $actors=array(
            array('pic'=>'https://i.pinimg.com/originals/d4/2f/5c/d42f5c5bb3d0860a7569ee6cc125f95a.jpg','fname'=>'Daisy', 'lname'=>'Ridley','dob'=>'1992','origin'=>'England'),
            array('pic'=>'https://m.media-amazon.com/images/M/MV5BOWViYjUzOWMtMzRkZi00MjNkLTk4M2ItMTVkMDg5MzE2ZDYyXkEyXkFqcGdeQXVyODQwNjM3NDA@._V1_UY317_CR44,0,214,317_AL_.jpg','fname'=>'Adam', 'lname'=>'Driver','dob'=>'1983','origin'=>'United States'),
            array('pic'=>'https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTM2MjA3MjAyNDg1NTQ3ODM2/john-boyega_shutterstock_356309123jpg.jpg','fname'=>'John', 'lname'=>'Boyega','dob'=>'1992','origin'=>'England'),
            array('pic'=>'http://wikipicky.com/uploads/celebrity/Oscar%20Isaac.jpg','fname'=>'Oscar', 'lname'=>'Isaac','dob'=>'1979','origin'=>'Guatemala'),
            array('pic'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq_hEnqscdantbiJWcF3_6IU_-ZYO8jnQTnpXtKmkcgv-5m-x3','fname'=>'Domhnall', 'lname'=>'Gleeson','dob'=>'1983','origin'=>'Ireland'),
            array('pic'=>'https://vignette.wikia.nocookie.net/disney/images/8/8b/KellyMarieTran.jpg/revision/latest?cb=20171218102743','fname'=>'Kelly', 'lname'=>'Tran','dob'=>'1989','origin'=>'United States'),
            array('pic'=>'http://www.jedinews.co.uk/wp-content/uploads/2018/03/joonas-suotamo.jpg','fname'=>'Joonas', 'lname'=>'Suotamo','dob'=>'1986','origin'=>'Finland'),
            array('pic'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Mark_Hamill_%282017%29.jpg/220px-Mark_Hamill_%282017%29.jpg','fname'=>'Mark', 'lname'=>'Hamill','dob'=>'1951','origin'=>'United States'),
            array('pic'=>'https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTQxODE5NzQ0OTUyMDAyMDU3/billy-dee-williams-gettyimages-458738650_1600jpg.jpg','fname'=>'Billy', 'lname'=>'Williams','dob'=>'1937','origin'=>'United States'),
            array('pic'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Carrie_Fisher_2013-a_straightened.jpg/220px-Carrie_Fisher_2013-a_straightened.jpg','fname'=>'Carrie', 'lname'=>'Fisher','dob'=>'1956','origin'=>'United States')
        


        );
        ?>
        <?php
        echo '<table class="table">
            <thead class="thead-dark">
            <tr id="tableHead">
                <th id="headText" scope="col">Picture</th>
                <th id="headText" scope="col">First Name</th>
                <th id="headText" scope="col">Last Name</th>
                <th id="headText" scope="col">Date of Birth</th>
                <th id="headText" scope="col">Country of Origin</th>
            </tr>
            </thead>';
            
        
        foreach($actors as $actor) {
            echo '<tr><td><img src="'.$actor["pic"].'"></td><td>'.$actor["fname"].'</td><td>'.$actor["lname"].'</td><td>'.$actor["dob"].'</td><td>'.$actor["origin"].'</td></tr>';
        }
        echo '</table>'
        ?>
    </div>
    <footer>
        <p id="footertext">© 2019 George Vlasak. All Rights Reserved.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <script src="" async defer></script>
</body>

</html>