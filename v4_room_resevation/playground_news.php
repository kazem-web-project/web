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
    <h1>Welcome to Nirvana Hotel</h1>   
    
     <!-- Navbar Code -->
    
     <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Nirvana Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Room Reservation</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Log In
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">Sign In</a></li>
                  <li><a class="dropdown-item" href="#">Sign Up</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- end of nav bar Code -->

    <!-- this is the content part! it renders from component.php-->

    <div class="container">
        <div class="row text-center py-5">
            <div class="">
                <form action="#" method="get">
                    <div class="card shadow">
                      <?php 
                      
                      $result = $database->get_news();
                                            
                      //echo $result;
                      while($row = mysqli_fetch_assoc($result)){
                        // (news_id, image, title, text, date)
                        // function news_component($news_id,$news_image,$news_title,$news_text,$news_date)
                        news_component($row['news_id'] , $row['image'] , $row['title'] ,$row['text'], $row['date']);
                        //  component($row['room_id'],$row['price'], $row['img']);
                      }
                      ?>

                    </div>
                </form>
            
            </div>
        </div>


    </div>

    <!-- until here -->



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>