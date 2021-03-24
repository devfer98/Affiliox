<?php
namespace App\Models;
class Delivery extends \Core\Connect{

    function __construct() {
    }
    
    public function add( $productID, $price, $startDis, $endDis, $dPeriod) {
        
        $conn=static::connectDB();
        // $reply="no";
        $stmt = $conn->prepare("INSERT INTO Delivery (price,startDis,endDis,dPeriod,productID) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("dsssi",$price,$startDis,$endDis,$dPeriod,$productID);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        }else{
        echo $stmt->error;
            return false;
        }
    }

    public function deliverycharges($prodID)
    {
        $conn=static::connectDB();
        $stmt = $conn->prepare("SELECT * FROM Delivery WHERE productID = ? ORDER BY endDis");
        $stmt->bind_param("i",$prodID);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $stmt->close();
            return $result;

        }else{

        echo $stmt->error;
            return false;
        }
        
    }

    public function checkoutDelivery($prodID,$endDis)
    {
        $conn=static::connectDB();
        $stmt = $conn->prepare("SELECT * FROM Delivery WHERE productID = ? AND  endDis = ? ");
        $stmt->bind_param("is",$prodID,$endDis);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            return $result;

        }else{

        echo $stmt->error;
            return false;
        }
    }
    public function getDelivery($productID) {
        $conn=static::connectDB();

        // $stmt = $conn->prepare("SELECT * FROM Feedback WHERE accountStatus = 'Pending'");
        $stmt = $conn->prepare("SELECT * FROM category");
        // $stmt->bind_param("s", $userID);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }
}
