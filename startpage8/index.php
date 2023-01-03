
<?php
    require_once('./inc/database.php');
    session_start();
    $errors = [];
    $rooms_url = "rooms.php";
    

    session_unset();
    if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"]) ) {
        // create instance of database
        $database = new HotelDatabase();    
        // echo $_POST['username'] . $_POST['password'] ;
        $username = $_POST['username'];
        echo "my Pass: ". $_POST['password'];
        // $password = password_hash($_POST['password'] , PASSWORD_DEFAULT); 
        
        echo "my hash Pass: ". $password . '<br>';
        // echo '<br>    '. $password . '   ssssssssssssssssssssss' . $_POST['password'] . 'aaa';
        $result = $database->get_user_hash($username);
        // echo $result;
        if(null!= $result){
            
            while($row = mysqli_fetch_assoc($result)){
                //| username| first_name | last_name| email| gender | password| title| is_admin | is_active
                if(password_verify($_POST['password'], $row['password'])){
                
                $_SESSION["username"] = $row['username'];
                $_SESSION["first_name"] = $row['first_name'];
                $_SESSION["last_name"] = $row['last_name'];;
                $_SESSION["email"] = $row['email'];
                $_SESSION["gender"] = $row['gender'];
                $_SESSION["password"] =   $row['password'];
                
                //echo '<br>aaaaaaaaaaaaaaaa' . $_SESSION["password"] ;
                $_SESSION["title"] = $row['title'];
                $_SESSION["is_admin"] = $row['is_admin'];
                $_SESSION["is_active"] =$row['is_active'];        
                // echo (. $row['firstname'] . $row['password']);    
                header('Location: '.$rooms_url);
                } 
                
            }
        }else{
            // echo "No data!";
        }
    }
    
    echo $_SESSION["username"];
    
?>

<!DOCTYPE html>
<!-- it is the first page and 80% finished!
    user direction is not implemented.
    it should be in php and then redirect!

-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="res/css/style_login.css">
    <title>Book Hotel for Holiday - Nirvana Hotel</title>
    <meta name="description" content="Book a romantic Hotel in Austria. Beautiful and air-conditioned rooms for your holiday. Nirvana Hotel has the most comfortable suits very close to the city center of Vienna and the airport! There is a possibility for having parking, breakfast and animals in the room.">
    <meta name="keywords" content="Hotel, Booking Rooms, Hotel close to the airport, hotel parking, hotel Vienna city center, airconditioner, comfortable rooms, parking, animal in the room, breakfast">
    <meta name="Author" content="Kazem Gholibeigian">
    <link rel="shortcut icon" type="image/ico" href="./res/img/logo_final.ico">
    


</head>
<body>
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <img src="logo_final.png" class="logo" alt="Nirvana Hotel">
                <!--form start-->
                <form class="form-container" action="#" method="POST">
                    <h1>Please Login:</h1>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Username" name="username">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-block my_button">Sign In</button>
                        <a href="register.php" class="btn btn-success"><button class="btn btn-success btn-block my_button">Sign Up</button></a> 
                        <a href="rooms.php" class="btn btn-danger"><button  class="btn btn-danger btn-block">Continue as Guest</button></a>
                    </div>  
                  </form>
                  <!--form end-->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
    
</body>
</html>