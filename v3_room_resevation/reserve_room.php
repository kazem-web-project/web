<?php
    // todo. Receive it from the rooms_index.php
    $room_id_input = 1;
    $room_price=20;

    <?php
	if (isset($_POST['room_id']) && isset($_POST['room_price'])) {
		$room_id_input = $_POST['room_id'];
        $room_price=$_POST['room_price'];

		$url = "page1.php?room_id=" . $room_id_input."&room_price=".$room_price;
		header('Location: ' . $url);
		exit();
	}
?>

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesomw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="./res/css/style.css">
    <title>Nirvana Hotel</title>
</head>

<body>
    <div class="container">
        <div class="row text-center py-5">

            <!--image at the top-->
            <img src="res\img\room2.jpg" class="img-fluid" alt="...">
            <!--end of image -->
            <h1 class="h1">Die zeitgemäße Interpretation des Salzburger Stils</h1>
            <p class="text-justify room_description">
                Nach einem umfassenden Redesign im Jahr 2017 präsentieren sich die Zimmer im Hotel Amadeus in neuer
                Atmosphäre: luftig, modern, hell. Die historische Gebäudestruktur macht jedes Zimmer zu einem Unikat.
                Hier gibt es keine Standardlösungen. Hier gibt es viel Liebe zum Detail. Und das klare Bekenntnis zur
                Individualität. Mal ein Himmelbett, dann wieder ein hochwertiges Boxspringbett. Hier eine natürlich raue
                Holzdecke, dort ein exquisites Lederfauteuil. Farbliche Akzente geben den Ton an. Ausgesuchte
                Designstücke unterstreichen gekonnt den Salzburger Stil. Mit viel Fein- und Stilgefühl entstehen Räume
                voll wohnlicher Behaglichkeit. Genießen Sie eine heimelige Ruhe trotz zentraler Lage dieses Hotels in
                der Salzburger Innenstadt.</p>

            <!-- form -->
            <!-- count of people-->
            <div class="form-floating form-control myselect">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>Please Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="3">More Than Three People</option>
                </select>
                <label for="floatingSelect">Number of People:</label>
                <!-- end of count of people-->

                <!-- date picker -->
                <div class="mb-3 datepickers">
                    <div class="d-flex justify-content-around">
                        <label for="start" id="datePickerStart" class="col-sm-2 col-form-label datePicker">Start
                            date:</label>
                        <input type="date" name="trip-start" min="2022-10-01" max="2028-12-31">

                        <label for="start" id="datePickerEnd" class="col-sm-2 col-form-label datePicker">End
                            date:</label>
                        <input type="date" name="trip-start" min="2022-10-01" max="2028-12-31">
                    </div>
                </div>
                <!--end date picker -->

                <!-- chcek boxes-->
                <div class="form-check mycheck">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label" for="flexCheckDefault">
                        I need a Parking lot.
                    </label>
                </div>
                <div class="form-check mycheck">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label" for="flexCheckChecked">
                        I would like to have Breakfast.
                    </label>
                </div>
                <div class="form-check mycheck">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label" for="flexCheckChecked">
                        I own a pet.
                    </label>
                </div>
                <!-- end of check boxes-->
                <!-- buttons-->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="button">Button</button>
                    <button class="btn btn-primary" type="button">Button</button>
                </div>
            </div>

            <!-- end of form -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>