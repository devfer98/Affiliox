<?php

namespace App\Models;
class TransactionPromo extends \Core\Connect{
 
    function __construct() {
        
    }
    
    public function addTransSell() {

    }

    public function addTransPromo($ammount, $status,  $userID, $date) {

        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO transaction (ammount, status,  userID, date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("diss", $ammount, $status,  $userID, $date);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        }else{
            echo 'SQL Error';
            return false;
        }
    }

    // WHERE userID = '{$_SESSION["userID"]}' 
    public function getTransPromo($userID)  {
        $conn=static::connectDB();

        $query = "select * from transaction WHERE userID = ?";
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s",$userID);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0 ){
                return $result;
            } else {
                $result = null;
                return  $result ;
            }
        } 
    }

  

    protected function before()
    {
        echo 'Login ? ';
    }

    protected function after()
    {
        echo ' Bye ? ';
    }

    
    
    
}
