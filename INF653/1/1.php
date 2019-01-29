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
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">GEORGE VLASAK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarContent" aria-controls="navbarContent"
            aria-expanded="false" aria-label="Toggle navigation.">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">ABOUT <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">WORKS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">SEARCH</button>
            </form>
        </div>
    </nav>
    <div class="container-fluid" id="siteWrapper">
        <div class="row jumbotron jumbotron-fluid img-responsive">
            <div class="container splash col-9">
                <h1 class="display-4">George Vlasak</h1>
                <p class="lead">An ardent web developer, compelled by the call of the digital sea.</p>
                <i class="fa fa-angle-double-down" aria-hidden="true" href="#bio"></i>
            </div>
        </div>
        <div class="row" id="bio">
            <div class="col-12">
                <?php echo "<h4>Name</h4>";
                echo "<h5>George Vlasak</h5>";
                ?>
            </div>
            <div class="col-12">
                <?php echo "<h4>Age</h4>";
                echo "<h5>28 years old</h5>";
                ?>
            </div>
            <div class="col-12">
                <?php echo "<h4>Hometown</h4>";
                echo "<h5>Junction City, KS</h5>";
                ?>
            </div>
            <div class="col-12">
                <?php echo "<h4>Bio</h4>";
                echo "<h6>An aspiring web developer and contributor to the digital revolution we are seeing today, George Vlasak 
                spends the majority of his time practicing his craft - getting those ever-so-necessary reps in to become as 
                well-rounded as possible.  You can find some of the projects that have been actualized at his personal website.</h6>";
                ?>
            </div>
        </div>
    </div>
    <footer>
        <p id="footertext">© 2019 George Vlasak. All Rights Reserved.</p>
    </footer>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <script src="" async defer></script>
</body>

</html>