<?php
// Session
session_start();

// IF untuk bila login tidak sebagai level 1  = 'Admin'
if (isset($_SESSION["level"]) == 1) {
    header("location:tokubetsu/dashboard/dashboard.php");
}

// Connet DB
require 'authentication/db/conn_db.php'

// Query

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home Code</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/terminal-solid.svg" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/startbootstrap-landing-page-gh-pages/css/styles.css" rel="stylesheet" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="assets/fontawesome-free-6.1.1-web/css/all.min.css">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <div class="col-8">
                <a class="navbar-brand btn btn-outline-dark" href="index.php">
                    <img src="assets/img/terminal-solid.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Code
                </a>
            </div>
            <!-- Tutorial Button -->
            <div class="btn-group ms-4">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Tutorial
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="learn/html">Tutorial HTML</a></li>
                    <li><a class="dropdown-item" href="learn/php">Tutorial PHP</a></li>
                    <li><a class="dropdown-item" href="learn/js">Tutorial Javascript</a></li>
                </ul>
            </div>
            <!-- Kuis Button -->
            <div class="btn-group me-2">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Kuis
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="kuis/html">Kuis HTML</a></li>
                    <li><a class="dropdown-item" href="kuis/php">Kuis PHP</a></li>
                    <li><a class="dropdown-item" href="kuis/js">Kuis Javascript</a></li>
                </ul>
            </div>
            <?php if (isset($_SESSION["level"])) {
                echo  "<a class='nav-link dropdown-toggle' id='navbarDropdown' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'><i class='fas fa-user fa-fw'></i></a>";
                echo  "<ul class='dropdown-menu dropdown-menu-end' aria-labelledby='navbarDropdown'>";
                echo "<p class='dropdown-item'>" . $_SESSION["name"] . "</p>";
                echo "<hr class='dropdown-divider'>";
                echo "<li><a class='dropdown-item' href='authentication/login/logout.php'>Logout</a></li>";
                echo "</ul>";
            } else {
                echo  "<a class='btn btn-primary' href='authentication/login/index.php'>Login</a>";
            }
            ?>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-5">Belajar Code</h1>
                        <form class="form-subscribe" id="contactForm">
                            <!-- Email address input-->
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="searchMateri" type="search" placeholder="Ketik pencarian disini!" />
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="border">
                                                <h5 class="card-title text-dark mt-2 mx-1" style="text-align: initial;">Card title</h5>
                                                <hr class="border border-dark border-2 opacity-50">
                                                <p class="card-text text-dark mx-1" style="text-align: left;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-auto"><button class="btn btn-primary btn-lg" type="submit">Submit</button></div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Icons Grid-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-book m-auto text-primary"></i></div>
                        <h3>Materi yang mudah dipahami</h3>
                        <p class="lead mb-0">Pelajari materi dengan seksama!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-pen m-auto text-primary"></i></div>
                        <h3>Kuis</h3>
                        <p class="lead mb-0">Kuis yang membantu mengingat tutorial yang sudah dipelajari!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                        <h3>Cobalah Code Editor</h3>
                        <p class="lead mb-0">Praktek langsung dengan code editor kami!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Showcases-->
    <section class="showcase mt-5">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img">
                    <img src="assets/img/htmlpng.png" class=" mt-5 mx-5" alt="" width="400" height="400">
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>HTML</h2>
                    <p class="lead mb-0">HTML merupakan bahasa utama dalam pembuatan website!</p>
                    <a href="learn/html/index.php" class="btn btn-lg btn-outline-danger mt-3">Pelajari</a>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img">
                    <img src="assets/img/jspng.png" class="mt-5 mx-5" alt="" width="400" height="400">
                </div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Javascript</h2>
                    <p class="lead mb-0">Javascript merupakan bahasa pemrograman client-side yang membuat website lebih dinamis!</p>
                    <a href="learn/js/index.php" class="btn btn-lg btn-outline-warning mt-3">Pelajari</a>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img">
                    <img src="assets/img/phppng.png" class="mt-5 mx-5" alt="" width="550" height="300">
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>PHP</h2>
                    <p class="lead mb-0">PHP merupakan bahasa pemrograman server-side yang sering dipakai banyak orang!</p>
                    <a href="learn/php/index.php" class="btn btn-lg btn-outline-info mt-3">Pelajari</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#!">About</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Contact</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Code 2023. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/startbootstrap-landing-page-gh-pages/js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>