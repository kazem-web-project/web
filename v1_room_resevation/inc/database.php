<?php

class HotelDatabase
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;


    public function __construct(
        $dbname="Hotel",
        $servername ="localhost",
        $username ="root",
        $password=""
    )
    {
        $this->dbname = $dbname;
        $this->servername =$servername;
        $this->username = $username;
        $this->password = $password;

        // connection using mysqli
        $this->con = mysqli_connect($servername, 
                                    $username, 
                                    $password,
                                    $dbname
                                    );
        
        // check connection
        if(!$this->con){
            die("Connection Not Successfull!".mysqli_connect_error());
        }
    }
    
    public function getRoomData(){
        // query
        // $myTable = "rooms";
        $sql ="SELECT * FROM rooms;";

        $result = mysqli_query($this->con, $sql);
        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }
}