<?php
namespace App\Models;
class TransactionM extends \Core\Connect {

    function __construct() {
        include ("connect.php");
    }
    
    public function addTransSell() {

    }

    public function addTransPromo($amount, $status, $date, $userID) {
    	// $addBuyer = "insert into transaction values ('".$userID."', '".$ammount."', '".$status."', '".$date."', '".$userID."')";       
        // mysqli_query($conn,$addBuyer)or die (mysqli_error($conn));

        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO transaction (amount, status, date, userID) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("dsss", $userID, $amount, $status, $userID);
        if ($stmt->execute()) {
            return true;
            $stmt->close();
        }else{
            echo 'SQL Error <br />';
            // echo $stmt->error;
            return false;
        }
    }

    public function getTrans($userID) {
    	// $query = "select userID from transaction WHERE userID = '".$userID."'";
        // $buyer = mysqli_query($conn,$query);
        // return $promoter;

        $conn=static::connectDB();
        $stmt = $conn->prepare("SELECT * FROM transaction WHERE userID=?");
        $stmt->bind_param("s", $userID);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $stmt->close();
            if( $result!=NULL){
                return $result;
            }else{
                echo 'SQL Error <br />';
            }
        }else{
            echo 'SQL Error <br />';
            // echo $stmt->error;
            // return false;
        }
    }
    
}
