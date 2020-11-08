<?php
namespace Core;


abstract class Connect{
    protected static function connectDB(){
        static $db =null;

        if($db === null){
            $host= "localhost";
            $dbName="test2";
            $user="root";
            $password="";

            $db = mysqli_connect($servername, $username, $password, $dbname) or die("DB connection failed");
            return $db;

        }
        

    }



}

