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
        $stmt->bind_param("iiss", $ammount, $status,  $userID, $date);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        }else{
            echo 'SQL Error';
            return false;
        }
    }

    // WHERE userID = '{$_SESSION["userID"]}' 
    public function getTransPromo() {

        $conn=static::connectDB();
        $sql = "SELECT transID, ammount, status, date FROM transaction WHERE userID = '{$_SESSION["userID"]}' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                $_SESSION['transID'] = $row["transID"];
                $_SESSION['ammount'] = $row["ammount"];
                $_SESSION['status'] = $row["status"];
                $_SESSION['date'] = $row["date"];
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        
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
