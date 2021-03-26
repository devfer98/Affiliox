<?php

namespace App\Models;
class MinistoreM extends \Core\Connect {

    function __construct() {
    }

    public function isMinistore($userID) {
        $conn=static::connectDB();
        $flag=0;

        $stmt = $conn->prepare("SELECT * FROM ministore WHERE userID= ?");
        $stmt->bind_param("s", $userID);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            if($result->num_rows>0){
                return 1;
            }else{
                return 0;
            }
        }else{
            echo 'SQL Error';
        }
    }

    public function getMinistore($userID) {
        $conn=static::connectDB();

        $stmt = $conn->prepare("SELECT * FROM ministore WHERE userID= ?");
        $stmt->bind_param("s", $userID);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }

    public function getCount() {
        $conn=static::connectDB();

        $stmt =$conn->prepare("SELECT COUNT(userID) FROM ministore;");
        
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }
   
}
    

