<?php

namespace App\Models;
class TransactionPromo extends \Core\Connect{
 
    function __construct() {
        
    }
    
    public function addTransSell() {

    }

    public function availtot($tot,$userID)
    {
        $widrowTot = 0;
        $conn=static::connectDB();
        $stmt0 = $conn->prepare("SELECT sum(ammount) AS amount FROM transaction WHERE userID = ? ");
        $stmt0->bind_param("s", $userID);

        if ($stmt0->execute()) {
            $result = $stmt0->get_result();
            while($row =$result->fetch_assoc()){
                $widrowTot = $row['amount'];
                // echo  $widrowTot;
            }
        }else{
            echo 'SQL Error';
            return false;
        }
        $availableTot = $tot - $widrowTot;
        return $availableTot;
    }

    public function addTransPromo($ammount, $status, $userID, $date,$total) {
        $conn=static::connectDB();
        // $widrowTot = 0;

        // $stmt0 = $conn->prepare("SELECT sum(ammount) AS amount FROM transaction WHERE userID = ? ");
        // $stmt0->bind_param("s", $userID);

        // if ($stmt0->execute()) {
        //     $result = $stmt0->get_result();
        //     while($row =$result->fetch_assoc()){
        //         $widrowTot = $row['amount'];
        //         echo  $widrowTot;
        //     }
        // }else{
        //     echo 'SQL Error';
        //     return false;
        // }
        
        $availableTot=$this->availtot($total,$userID);    
        
        echo $availableTot;
        If($ammount > $availableTot){
            return false;
            
        }else{
            
            $stmt = $conn->prepare("INSERT INTO transaction (ammount, status,userID, date) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("diss", $ammount, $status, $userID, $date);
            if ($stmt->execute()) {
                $stmt->close();
                return true;
            }else{
                echo 'SQL Error';
                return false;
            }

        }

    }

    
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
    

    public function getSalesAmount($userID)  {
        $conn=static::connectDB();
        $stmt =$conn->prepare("SELECT SUM(product.price) AS salesAmount
            FROM (product 
            INNER JOIN prodsinorder ON product.productID = prodsinorder.productID)
            WHERE prodsinorder.productID = ANY (SELECT productID FROM product WHERE name = ANY (SELECT name FROM ministore WHERE userID= ?));");
        // echo $conn->error;
        $stmt->bind_param("s", $userID);
        
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
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
