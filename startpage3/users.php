<?php
require_once('./inc/database.php');
require_once('./inc/session_setter.php');

session_start();
$rooms_url = "rooms.php";
// TODO : change this to orwerview users:
$users_url_for_admin = "rooms.php";
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hotel";
$admin_modify_user_bool = 0;

// var_dump($_GET);

if (!empty($_GET) && isset($_GET["username"])) {
    //if($_Get["username"]){
    echo "admin_modify_user_bool = 1";
    if ($_SESSION["is_admin"] == "1") {
        $_SESSION["target_user_username"] = $_GET["username"];
        $admin_modify_user_bool = 1;
    }
}


if ($admin_modify_user_bool == 1) {
    echo "bool 0;";
}

// to check via select
$username_check = '';
$password_check = '';
var_dump($_SESSION["is_admin"] == "0");
var_dump(isset($_SESSION["is_admin"]));


if (isset($_SESSION["is_admin"])) {

    if ($_SESSION["is_admin"] == "1") {
        // echo"is_admin";

        $database = new HotelDatabase();
        if ($_SERVER["REQUEST_METHOD"] != "POST" && $admin_modify_user_bool == 1) {
            $target_user = $_GET["username"];


            $result = $database->get_user_admin($target_user);
            // echo $result;
            if (null != $result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    //| username| first_name | last_name| email| gender | password| title| is_admin | is_active            
                    $_SESSION["target_user_username"] = $row['username'];
                    $_SESSION["target_user_first_name"] = $row['first_name'];
                    $_SESSION["target_user_last_name"] = $row['last_name'];;
                    $_SESSION["target_user_email"] = $row['email'];
                    $_SESSION["target_user_gender"] = $row['gender'];
                    $_SESSION["target_user_password"] = $row['password'];
                    $_SESSION["target_user_title"] = $row['title'];
                    $_SESSION["target_user_is_admin"] = $row['is_admin'];
                    $_SESSION["target_user_is_active"] = $row['is_active'];
                    // echo (. $row['firstname'] . $row['password']); 
                }
                if (!empty($_SESSION["username"]) || !isset($_SESSION["username"])) {

                    // echo "================";
                    //var_dump($_SESSION);
                    //header('Location: '.$rooms_url);
                }
            } else {
                // echo "No data!";
            }
        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // modify another user by admin! GET + POST
            if ($admin_modify_user_bool == 1) {
                $first_name = $_POST["first_name"];
                $last_name = $_POST["last_name"];
                $email = $_POST["email"];
                $gender  = $_POST["gender"];
                // TODO: implement title in register
                $title = $_POST["title"];
                $is_admin = 1;
                $is_active = $_POST["is_active"];
                if (isset($_GET["username"])) {
                    $database->del_user($_GET["username"], $_SESSION["target_user_password"]);
                    $database->insert_new_user(
                        $_SESSION["target_user_username"],
                        $first_name,
                        $last_name,
                        $email,
                        $gender,
                        $_POST["new_password1"],
                        $title,
                        $is_admin,
                        $is_active
                    );
                }
                // change the admin user profile itself POST + not Get
            } else if ($admin_modify_user_bool == 0) {
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $username = $_POST["username"];
                    $sql = "DELETE FROM users WHERE username='$username'";

                    // use exec() because no results are returned
                    $conn->exec($sql);
                } catch (PDOException $e) {
                    echo $sql . "<br>" . $e->getMessage();
                }

                $first_name = $_POST["first_name"];
                $last_name = $_POST["last_name"];
                $email = $_POST["email"];
                $gender  = $_POST["gender"];
                // TODO: implement title in register
                $title = $_POST["title"];
                $is_admin = 1;
                $is_active = 1;
                $new_password = $_POST["new_password1"];
                // prepare and bind
                // echo $gender,$username, $first_name, $last_name, $email,$password,$title, $is_admin, $is_active; 

                $stmt = $conn->prepare("INSERT INTO users (username, first_name,last_name, email, gender, password, title, is_admin,is_active ) VALUES (:username, :first_name,:last_name, :email, :gender, :password, :title, :is_admin,:is_active )");
                // $stmt->bindParam($username, $first_name, $last_name, $email,$gender,$password,$title, $is_admin, $is_active);
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':first_name', $first_name);
                $stmt->bindParam(':last_name', $last_name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':gender', $gender);
                $stmt->bindParam(':password', $new_password);
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':is_admin', $is_admin);
                $stmt->bindParam(':is_active', $is_active);

                $stmt->execute();
                header('Location: ' . $users_url_for_admin);
            } else {
                //return;
                // echo"return";
            }
        }
    } else if ($_SESSION["is_admin"] == "0") {
        var_dump($_SESSION);
        echo ("is_admin " . $_SESSION["is_admin"]);
        echo "not is_admin///////////////////////////////";
        // insert using PDO
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST["username"];
                $username_check = $username;
                $password = $_POST["new_password1"];
                $password_check = $password;
echo "------------------->" .($_POST["new_password2"] == $_POST["new_password1"]) && ($_POST["password"] == $_SESSION["password"]);
                if (($_POST["new_password2"] == $_POST["new_password1"]) && ($_POST["password"] == $_SESSION["password"])) {
                    try {
                        $sql = "DELETE FROM users WHERE username='$username'";

                        // use exec() because no results are returned
                        $conn->exec($sql);
                    } catch (PDOException $e) {
                        echo $sql . "<br>" . $e->getMessage();
                    }

                    $first_name = $_POST["first_name"];
                    $last_name = $_POST["last_name"];
                    $email = $_POST["email"];
                    $gender  = $_POST["gender"];
                    // TODO: implement title in register
                    $title = $_POST["title"];
                    $is_admin = 0;
                    $is_active = 1;

                    // prepare and bind
                    // echo $gender,$username, $first_name, $last_name, $email,$password,$title, $is_admin, $is_active; 

                    $stmt = $conn->prepare("INSERT INTO users (username, first_name,last_name, email, gender, password, title, is_admin,is_active ) VALUES (:username, :first_name,:last_name, :email, :gender, :password, :title, :is_admin,:is_active )");
                    // $stmt->bindParam($username, $first_name, $last_name, $email,$gender,$password,$title, $is_admin, $is_active);
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':first_name', $first_name);
                    $stmt->bindParam(':last_name', $last_name);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':gender', $gender);
                    $stmt->bindParam(':password', $password);
                    $stmt->bindParam(':title', $title);
                    $stmt->bindParam(':is_admin', $is_admin);
                    $stmt->bindParam(':is_active', $is_active);

                    $stmt->execute();
                } else {
                    //return;
                    // echo"return";
                }
                // echo"return ok";

                // TODO: after sing lands to the user page
                $my_session = new Session_setter();
                $my_session->get_user_set_session();
                echo "ssssssssssssssssssss";
                var_dump($_SESSION);
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
} else {
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--<link rel="stylesheet" href="res/css/sign_up_style.css"> -->
    <title>Document</title>
</head>

<body>
    <!-- insertr nav -->
    <?php
    require __DIR__ . './inc/navigation.php';
    echo insert_nav();
    ?>
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <img src="logo_final.png" class="logo" alt="">
                <!--form start-->
                <!-- <form action="new_user.php" method="POST" class="form-container"> -->
                <form action="#" method="POST" class="form-container">
                    <h1>Edit User:</h1>
                    <select name="title" class="dropdown" value="<?php echo ($admin_modify_user_bool == 1 ? $_SESSION["target_user_title"] : $_SESSION["title"]); ?>">
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                        <option value="Ms">Ms</option>
                        <option value="Dr">Dr</option>
                    </select>
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="first_name" class="form-control" aria-describedby="emailHelp" value="<?php echo ($admin_modify_user_bool == 1 ? $_SESSION["target_user_first_name"] : $_SESSION["first_name"]); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" name="last_name" class="form-control" aria-describedby="emailHelp" value="<?php echo ($admin_modify_user_bool == 1 ? $_SESSION["target_user_last_name"] : $_SESSION["last_name"]); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" value="<?php echo ($admin_modify_user_bool == 1 ? $_SESSION["target_user_email"] : $_SESSION["email"]); ?>" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" class="form-control" readonly="readonly" aria-describedby="emailHelp" value="<?php echo ($admin_modify_user_bool == 1 ? $_SESSION["target_user_username"] : $_SESSION["username"]); ?>" placeholder="<?php echo $_SESSION["username"]; ?>">
                    </div>
                    <input id="man" type="radio" name="gender" value="man" required>
                     <label for="man">Man</label><br>


                    <input id="woman" type="radio" name="gender" value="woman">
                     <label for="woman">Woman</label><br>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Old Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="new_password1" class="form-control" id="exampleInputPassword1" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter the New Password Again</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="new_password2" required>
                    </div><br>
                    <!-- todo add checkbox -->
                    <?php if ($admin_modify_user_bool == 1) {
                        echo "<label for=\"is_active\"> Is an active user</label><br>
                        <input type=\"checkbox\" name=\"is_active\" id=\"tag_1\" value=\"1\" ";
                        echo ($_SESSION["target_user_is_active"] == 1 ? 'checked' : '');
                        echo ">";
                    }  ?>


                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-block">Save</button>
                    </div>
                </form>
                <?php
                if (isset($_SESSION["is_admin"])) {
                    if ($_SESSION["is_admin"] == "1" && $admin_modify_user_bool) {
                        $delete_btn1 = "<div class=\"d-grid gap-2\"> <a href=\"./inc/delete_user.php?username=";
                        $delete_btn2 = $_SESSION["target_user_username"];
                        $delete_btn3 = "\" class=\"btn btn-danger\"><button  class=\"btn btn-danger btn-block\">Delete</button></a>";
                        echo $delete_btn1 . $delete_btn2 . $delete_btn3 . "</div>";
                    }
                }
                ?>
                <!--form end-->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
</body>

</html>