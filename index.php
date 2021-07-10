<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">

        <title> MyLibrary </title>
    </head> 
    <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">MyLibrary</a>
                <span class="navbar-text">hi bye</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav custom-nav">
                    <li class="nav-item custom-nav-item pe-5"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Browse</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">About-Us</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">LogIn</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/back.mp4">
            </video>
            <div class="vid-overlay"></div>
            <div class="vid-content">
                <h1 class="my-content">Welcome to My Library.</h1>
                <div class ="searchbar">
                    <input type="text" name="box" placeholder="Search Your Books Here.....">
                </div>
            </div>
        </div>
    </div>



        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="js/all.min.js"></script>
    </body>
</html>