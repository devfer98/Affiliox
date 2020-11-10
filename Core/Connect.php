<?php
namespace Core;


abstract class Connect{

    protected static function connectDB(){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "affiliox";
            $conn = mysqli_connect($servername, $username, $password, $dbname) or die("DB connection failed");
            return $conn;
            
    }

}

