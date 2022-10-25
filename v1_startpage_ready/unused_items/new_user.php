<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "hotel";
    
    $data = mysqli_connect($host, $user, $password, $db);
    if($data== false){
        die("connection error");
    }


    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $first_name=$_POST["first_name"];
        $last_name=$_POST["last_name"];
        $email=$_POST["email"];

        // TODO: implement title in register
        $title=$_POST["title"];

        echo $_POST;


        $sql ="select * from users where username='".$username."' and password='".$password."'  ";

        $result = mysqli_query($data, $sql);

        $row = mysqli_fetch_array($result);

        if (!$result) {
            printf("Error: %s\n", mysqli_error($data));
            exit();
        }
        
        if($row["is_admin"]==0){
            header("location:userhome.php");
        }
        else if($row["is_admin"]==1){
            header("location:adminhome.php");
        }else{
            echo "username or password incorrect!";
        }
        
    }

?>