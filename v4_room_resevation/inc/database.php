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

    public function insert_reserve($username_insert, $room_id_insert,$from_date_insert,$to_date_insert, $price_insert, $has_animal_insert, $has_parking_insert,$has_breakfast_insert, $reserved_on_insert){
        $sql = "insert into reserves (username, room_id, from_date, to_date, price,has_animal,has_parking,has_breakfast, reserved_on)
        values('$username_insert',$room_id_insert, '$from_date_insert', '$to_date_insert', $price_insert, $has_animal_insert,$has_parking_insert,$has_breakfast_insert,'$reserved_on_insert')";

        if (mysqli_query($this->con, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($this->con);
        }
    }
}