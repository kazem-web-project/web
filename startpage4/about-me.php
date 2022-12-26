<?php
require_once('./inc/component.php');
require_once('./inc/database.php');


// create instance of database
$database = new HotelDatabase();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Font Awesomw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="./res/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
    <title>Nirvana Hotel</title>
</head>

<body>
    <!-- Navbar Code -->
    <?php
    require __DIR__ . './inc/navigation.php';
    echo insert_nav();
    ?>
    <!-- end of nav bar Code -->

    <!-- this is the content part! it renders from component.php-->



    <!-- from here-->


    <div class="container">
        <div class="card shadow">
            <div class="row text-left py-5">
                <div class="row justify-content-center ">
                    <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
                        <div class="card border-0 shadow">
                            <img src="res/img/kazem_gholibeigian.jpg" alt="...">
                            <div class="card-body p-1-9 p-xl-5">
                                <div class="mb-4">
                                    <h3 class="h4 mb-0">Kazem Gholibeigian</h3>
                                    <span class="text-primary"></span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-3"><a href="#!"><i class="far fa-envelope display-25 me-3 text-secondary"></i>if22b028@technikum-wien.at</a></li>
                                    <li class="mb-3"><a href="#!"><i class="fas fa-mobile-alt display-25 me-3 text-secondary"></i>+436705070567</a></li>
                                    <li><a href="#!"><i class="fas fa-map-marker-alt display-25 me-3 text-secondary"></i>Wien, Österreich</a></li>
                                </ul>
                                <ul class="social-icon-style2 ps-0">
                                    <li><a href="#!" class="rounded-3"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!" class="rounded-3"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!" class="rounded-3"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#!" class="rounded-3"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ps-lg-1-6 ps-xl-5">
                            <div class="mb-5 wow fadeIn">
                                <div class="text-start mb-1-6 wow fadeIn">
                                    <h2 class="h1 mb-0 text-primary">#About Me</h2>
                                </div>
                                <p>Ich bin Kazem Gholibeigian und bin ein Student im Dual
                                    Informatik bei FH Technikum. </p>
                                <p class="mb-0">Ich habe schon Informatik
                                    Schwerpunkt Systemtechnik bei HTL Ottakring(Wien West) absolbiert.
                                    Ich habe die Webseite allein gemacht!</p>
                            </div>
                            <div class="mb-5 wow fadeIn">
                                <div class="text-start mb-1-6 wow fadeIn">
                                    <h2 class="mb-0 text-primary">#Education</h2>
                                </div>
                                <div class="row mt-n4">
                                    <div class="col-sm-6 col-xl-4 mt-4">
                                        <div class="card text-center border-0 rounded-3">
                                            <div class="card-body">
                                                <i class="ti-bookmark-alt icon-box medium rounded-3 mb-4"></i>
                                                <h3 class="h5 mb-3">Education</h3>
                                                <p class="mb-0">HTL-Ottakring, Informatik(Systemtechnik)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 mt-4">
                                        <div class="card text-center border-0 rounded-3">
                                            <div class="card-body">
                                                <i class="ti-pencil-alt icon-box medium rounded-3 mb-4"></i>
                                                <h3 class="h5 mb-3">Career Start</h3>
                                                <p class="mb-0">Soll eine Stelle bei partnerunternehmen des FH finden</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 mt-4">
                                        <div class="card text-center border-0 rounded-3">
                                            <div class="card-body">
                                                <i class="ti-medall-alt icon-box medium rounded-3 mb-4"></i>
                                                <h3 class="h5 mb-3">Experience</h3>
                                                <p class="mb-0">Ich habe als Installateur und Netzwerktechniker in meinem Heimatsland gearbeitet</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wow fadeIn">
                                <div class="text-start mb-1-6 wow fadeIn">
                                    <h2 class="mb-0 text-primary">#Benutzte Technologien</h2>
                                </div>
                                <p class="mb-4">Ich habe die Webseite allein gemacht.</p>
                                <div class="progress-style1">
                                    <div class="progress-text">
                                        <div class="row">
                                            <div class="col-6 fw-bold">PHP</div>
                                            <div class="col-6 text-end">73%</div>
                                        </div>
                                    </div>
                                    <div class="custom-progress progress rounded-3 mb-4">
                                        <div class="animated custom-bar progress-bar bg-success slideInLeft" style="width:73%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                    </div>
                                    <div class="progress-text">
                                        <div class="row">
                                            <div class="col-6 fw-bold">HMTL</div>
                                            <div class="col-6 text-end">15%</div>
                                        </div>
                                    </div>
                                    <div class="custom-progress progress rounded-3 mb-4">
                                        <div class="animated custom-bar progress-bar  slideInLeft" style="width:15%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                    </div>
                                    <div class="progress-text">
                                        <div class="row">
                                            <div class="col-6 fw-bold">SQL</div>
                                            <div class="col-6 text-end">25%</div>
                                        </div>
                                    </div>
                                    <div class="custom-progress progress rounded-3 mb-4">
                                        <div class="animated custom-bar progress-bar slideInLeft" style="width:25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                    </div>
                                    <div class="progress-text">
                                        <div class="row">
                                            <div class="col-6 fw-bold">CSS</div>
                                            <div class="col-6 text-end">12%</div>
                                        </div>
                                    </div>
                                    <div class="custom-progress progress rounded-3 mb-4">
                                        <div class="animated custom-bar progress-bar bg-secondary slideInLeft" style="width:12%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                    </div>
                                    <div class="progress-text">
                                        <div class="row">
                                            <div class="col-6 fw-bold">Aministrator Arbeit</div>
                                            <div class="col-6 text-end">80%</div>
                                        </div>
                                    </div>
                                    <div class="custom-progress progress rounded-3">
                                        <div class="animated custom-bar progress-bar bg-dark slideInLeft" style="width:80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>