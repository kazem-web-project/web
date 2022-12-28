<?php
require_once('database.php');
session_start();
// create instance of database
$database = new HotelDatabase();  

if(isset($_POST["submit"])){
    $title = $_POST["title"];
    $text = $_POST["text"];
    $file = $_FILES['file'];
    print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExt = explode(".",$fileName);
    $fielActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fielActualExt, $allowed)){
        if ($fileError === 0) {
            if ($fileSize < 10000000) {
                $fileNameNew = "news". uniqid('',true).".".$fielActualExt;
                $fileDestination = '../res/img/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                //header("Location: index.php?uploadsuccess");
            }else {
                echo "Your file is too big!";
            }
        }else {
            echo "Error uploading your file!";    
        }
    }else {
        echo "You are not allowed to upload this file type!";
    }
    
    // insert into news:
    $database->insert_news($title, $text ,$fileNameNew) ;
    
}


