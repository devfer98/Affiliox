<?php
namespace Core;
use PDO;

abstract class Connect{
    protected static function connectDB(){
        static $db =null;
        if($db === null){
            $host= "localhost";
            $dbName="test2";
            $user="root";
            $password="";

            try {
                $db= new PDO ("mysql:host =$host;dbname=$dbname",$username,$password);
                return $db;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }

    }

    // protected static function connectDB(){
    //     static $db =null;
    //     if($db === null){
    //         $servername = "localhost";
    //         $username = "root";
    //         $password = "";
    //         $dbname = "affiliox";

    //         try {
    //             $db = mysqli_connect($servername, $username, $password, $dbname) or die("DB connection failed");
    //             return $db;
    //         } catch (PDOException $e) {
    //             echo $e->getMessage();
    //         }
    //     }

    // }

}

