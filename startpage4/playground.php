<?php
    require_once('./inc/component.php');
    require_once('./inc/database.php');
    
    session_start();
    if(isset($_SESSION["is_admin"])){
        if($_SESSION["is_admin"]!="1"){
            // load admin components;
            var_dump($_SESSION);
    		$url = "reserve_room.php";
            header('Location: ' . $url);
            exit();
            
        }
    }
        
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
    <!-- <h1>Welcome to Nirvana Hotel</h1>-->
    
     <!-- Navbar Code -->
    <?php  
    require __DIR__ . './inc/navigation.php';
    echo insert_nav();
    ?>

    
    <!-- end of nav bar Code -->

    <!-- this is the content part! it renders from component.php
    username | room_id | from_date| to_date| price | has_animal | has_parking | has_breakfast | reserved_on | is_approved
-->

    <div class="container">
        <div class="row text-center py-5">

        <div class="col-md-12 col-sm-12 my-12 my-md-12">
    <form action="#" method="get">
        <div class="card shadow">
            <div>
                
            </div>
            <div class="card-body">
                <h5 class="card-title">Room $room_id</h5>
                <h6>
                

                <ol class="list-group list-group">
                    <li class="list-group-item  justify-content-between align-items-start">
                        <span id="blue-approved" class="badge bg-primary rounded-pill position-absolute top-0 end-0">Approved</span>
                        <div class="ms-2 me-auto">

                        <ul class="list-group list-group-horizontal">
                        <li class="list-group-item flex-fill ">
                        <p class="card-text">
                                <div>Username: </div>                 
                                <div>Room Number:</div>
                                
                                <div>Reserved On:</div>
                            </p>
                        </li>
                        <li class="list-group-item flex-fill ">
                            <p>
                                <div><input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                Breakfast</div>
                                <div><input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                Animal</div>
                                <div><input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                Parking</div>
                            </p>
                        </li>
                        <li class="list-group-item flex-fill ">
                            <p>
                                <div>From Date: </div>
                                <div>To Date: </div>
                                <div>Price: €</div>
                            </p>
                        </li>
                        </ul>
                         
                            

                            <div class="row justify-content-evenly">
                                <div  class="col-4">
                                    <div class="form-check form-switch approved">
                                    <span id="approvedText">Approve</span>
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" ><!--checked-->
                                    </div>
                                </div>
                                <div  class="col-4">
                                <a href="$url" <button type="submit" class="btn btn-warning my-3" name="room_id=room_$room_id">Save  <i class="fa-solid fa-cart-shopping"></i></button></a>
                                </div>
                            </div>
                        


                        </div>
                        
                    </li>
                </ol>
            </div>
        </div>
    </form>

</div>


            <?php
                
                $result = $database->getReservesData();
                //username | room_id | from_date| to_date| price | has_animal | has_parking | has_breakfast | reserved_on | is_approved

                //echo $result;
                
                while($row = mysqli_fetch_assoc($result)){
                    reserveComponent($row['username'],$row['room_id'], $row['from_date'], $row['to_date'],$row['price'],  $row['has_animal'], $row['has_parking'], $row['has_breakfast'], $row['reserved_on'], $row['is_approved']);
                }
                
                
            ?>

        </div>


    </div>

    <!-- until here -->



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>