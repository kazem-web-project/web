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
    <title>Nirvana Hotel</title>
</head>

<body>
    <!-- Navbar Code -->
    <?php
    require __DIR__ . './inc/navigation.php';
    echo insert_nav();
    ?>
    <!-- end of nav bar Code -->
    <div class="container">
        <div class="card shadow">
            <div class="row text-left py-5">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                
                                Github seite von dem Projekt:
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><a href="https://github.com/kazem-web-project/web">https://github.com/kazem-web-project/web</a></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Database Schema:
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><img src="res/img/db.png" alt="Database"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Database Tables:
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><div>
                            <p><span class="fw-bold">rooms:</span>(<u>room id</u> , price)</p>
                            <p><span class="fw-bold">reserves: </span>(from, to, reserved_on, has_breakfast, has_parking, has_animal, price, <u>room id#</u>, <u>username</u>)</p>
                            <p><span class="fw-bold">users:</span>(<u>username</u>, title, firstname, lastname, email, password, is_admin, is_active )</p>
                            <p><span class="fw-bold">posts:</span>(<u>username#</u>, <u>news id#</u>)</p>
                            <p><span class="fw-bold">news: </span>(<u>news id</u>, image, title, text, date)</p>
                            <p>Dabei finden Sie Schema.sql. Sie können das <a href="https://github.com/kazem-web-project/web/tree/main/Database_Dump">SQL-Files</a> einfach importieren(Database Schema und sample data).
                        </div></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                            Programm Design:
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"><img src="./res/img/structur.png" alt="" srcset=""></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
                            Program Structure:
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><p>Ich habe versucht KISS Prinziple einsetzen. Die Webseite ist Modular und Funtional design worden!<img src="./res/img/menu3.png" alt="" srcset=""></p></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Design:
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><p>
                        Da die Webseite zu eimen Hotel gehört, habe ich diese Farbe ausgewählt:
                        <h4 class="h4">Farben Auswahl:</h4>
                        Blau:Wir sollen Vertrauwürdig ausgesehen weden!
                        <br>
                        Rosa:Wir sollen ein sehr romantische Hotel ausgesehen werden!
                        </p>
                        <img src="res/img/color_theory.png" alt="" srcset=""></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- this is the content part! it renders from component.php-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>