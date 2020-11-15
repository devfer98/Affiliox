<?php

namespace App\Models;
class TransactionM extends \Core\Connect {

    function __construct() {
        
    }
    
    public function addTransSell() {

    }

    public function transPromo($ammount, $status) {

        $conn=static::connectDB();
        $stmt = $conn->prepare("insert into transaction (ammount, status) values (?)");
        $stmt->bind_param("i, i", $ammount, $status);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        }else{
            echo 'SQL Error';
            return false;
        }
    }

    // public function getTrans($userID) {

    //     $conn=static::connectDB();
    //     $stmt = $conn->prepare("SELECT * FROM transaction WHERE userID=?");
    //     $stmt->bind_param("s", $userID);
    //     if ($stmt->execute()) {
    //         $result = $stmt->get_result();
    //         $stmt->close();
    //         if( $result!=NULL){
    //             return $result;
    //         }else{
    //             echo 'SQL Error <br />';
    //         }
    //     }else{
    //         echo 'SQL Error <br />';
            
    //     }
    // }
    
}
