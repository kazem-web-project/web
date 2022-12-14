<?php
    require('./inc/database.php');
    $room_id_input = $_GET['room_id'];
    
    $room_price_input = $_GET['price'];
    $animal_price = 0;
    $breakfast_price = 0;
    $pet_price = 0;
	if (!isset($_GET['room_id']) && !isset($_GET['room_price'])) {        
		header("Location: index.php");
		exit();
	}

    if(isset($_POST['from_date']) && isset($_POST['to_date'])){
        $user_name = "fblann2";
        
        $database =new HotelDatabase();
        if(!isset($_POST['breakfast_check'])){
            $_POST['breakfast_check'] =0;
        }
        if(!isset($_POST['parking_check'])){
            $_POST['parking_check'] =0;
        }
        if(!isset($_POST['pet_checkbox'])){
            $_POST['pet_checkbox'] =0;
        }
        //  (username, room_id, from_date, to_date, price,has_animal,has_parking,has_breakfast, reserved_on)
        $now = date('Y-m-d H:i:s');
        $datediff = strtotime($_POST['to_date']) - strtotime($_POST['from_date']);
        $stay_days = round($datediff / (60 * 60 * 24));
       // echo "my differnce". $stay_days ;
        ($_POST['parking_check']=="1") ? $parking_price = ($stay_days * 5) : $parking_price = 0;
        ($_POST['breakfast_check']=="1") ? $breakfast_price = ($stay_days * 7) : $breakfast_price =(0);
        ($_POST['pet_checkbox']=="1") ? $pet_price = 10 : $pet_price = 0;
        // echo $pet_price;
        $room_price = ($stay_days * $room_price_input);
        $end_price = $room_price + $parking_price + $breakfast_price + $pet_price;

        echo " ". $end_price. "  ". $room_price . "  " . $parking_price. "  ".$breakfast_price."  " .$pet_price;
        // insert_reserve($username_insert, $room_id_insert,$from_date_insert,$to_date_insert, $price_insert, $has_animal_insert, $has_parking_insert,$has_breakfast_insert, $reserved_on_insert)
        
        $database->insert_reserve($user_name, $_GET['room_id'],$_POST['from_date'], $_POST['to_date'], 
                                    $end_price, $_POST['pet_checkbox'] ,$_POST['parking_check'], $_POST['breakfast_check'], $now);
    
    
    //echo $_POST['from_date']. "  " . $_POST['to_date']. "  " . $_POST['parking_check']. "  " . $_POST['breakfast_check']. "  " . $_POST['pet_checkbox'];
    }


// $url = "page2.php?username=" . $username;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesomw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="./res/css/style.css">
    <title>Nirvana Hotel</title>
</head>

<body>
    <div class="container">
        <div class="row text-center py-5">

            <!--image at the top-->
            <img src=<?php echo "res\img\\room".$room_id_input.".jpg"; ?> class="img-fluid" alt="...">
            <!--end of image -->
            <h1 class="h1">Die zeitgem????e Interpretation des Salzburger Stils</h1>
            <p class="text-justify room_description">
                Nach einem umfassenden Redesign im Jahr 2017 pr??sentieren sich die Zimmer im Hotel Amadeus in neuer
                Atmosph??re: luftig, modern, hell. Die historische Geb??udestruktur macht jedes Zimmer zu einem Unikat.
                Hier gibt es keine Standardl??sungen. Hier gibt es viel Liebe zum Detail. Und das klare Bekenntnis zur
                Individualit??t. Mal ein Himmelbett, dann wieder ein hochwertiges Boxspringbett. Hier eine nat??rlich raue
                Holzdecke, dort ein exquisites Lederfauteuil. Farbliche Akzente geben den Ton an. Ausgesuchte
                Designst??cke unterstreichen gekonnt den Salzburger Stil. Mit viel Fein- und Stilgef??hl entstehen R??ume
                voll wohnlicher Behaglichkeit. Genie??en Sie eine heimelige Ruhe trotz zentraler Lage dieses Hotels in
                der Salzburger Innenstadt.</p>

            <!-- form -->
            <!-- count of people-->
            <form action="#" method="post">
                <div class="form-floating form-control myselect">

                    <label for="floatingSelect">Number of People:</label>
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Please Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="3">More Than Three People</option>
                    </select>

                    <!-- end of count of people-->

                    <!-- date picker -->
                    <div class="mb-3 datepickers">
                        <div class="d-flex justify-content-around">
                            <label for="start" id="datePickerStart" class="col-sm-2 col-form-label datePicker">Start
                                date:</label>
                            <input name="from_date" type="date" name="trip-start" min="2022-10-01" max="2028-12-31">

                            <label for="start" id="datePickerEnd" class="col-sm-2 col-form-label datePicker">End
                                date:</label>
                            <input name="to_date" type="date" name="trip-start" min="2022-10-01" max="2028-12-31">
                        </div>
                    </div>
                    <!--end date picker -->

                    <!-- chcek boxes-->
                    <div class="form-check mycheck">
                        <input name="parking_check" class="form-check-input" type="checkbox" value="1">
                        <label class="form-check-label" for="flexCheckDefault">
                            I need a Parking lot.
                        </label>
                    </div>
                    <div class="form-check mycheck">
                        <input name="breakfast_check" class="form-check-input" type="checkbox" value="1">
                        <label class="form-check-label" for="flexCheckChecked">
                            I would like to have Breakfast.
                        </label>
                    </div>
                    <div class="form-check mycheck">
                        <input name="pet_checkbox" class="form-check-input" type="checkbox" value="1">
                        <label class="form-check-label" for="flexCheckChecked">
                            I own a pet.
                        </label>
                    </div>
                    <!-- end of check boxes-->
                    <!-- price and room number-->
                    <div class="border border-light">
                        <div>Room Number:  <?php echo  $room_id_input ?></div>
                        <div>Price per night:  ???<?php echo $room_price_input ?></div>
                    </div>
                    <!-- buttons-->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit">Reserve!</button>
                    </div>
                </div>

                <!-- end of form -->
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>