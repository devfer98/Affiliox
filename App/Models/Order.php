<?php

namespace App\Models;

class Order extends \Core\Connect
{

    function __construct()
    {
        // include ("connect.php");
    }

    public function addOrder($status, $amount, $datetime, $deliveryAddress, $deliveryDeadline, $buyUserID, $proUserID, $totalCommission)
    {
        $conn = static::connectDB();

        if ($stmt = $conn->prepare("INSERT INTO `order` (`status`, `amount`, `datetime`, `deliveryAddress`, `deliveryDeadline`, `buyUserID`, `proUserID`, `totalCommission`) VALUES (?,?, ?, ?, ?,?, ?, ?)")) {
            $stmt->bind_param("sdsssssi", $status, $amount, $datetime, $deliveryAddress, $deliveryDeadline, $buyUserID, $proUserID, $totalCommission);

            if ($stmt->execute()) {
                
            }
            } else {

                $error = $conn->errno . ' ' . $conn->error;
                echo $error;
            }

            $sql = "SELECT orderID FROM `order` ORDER BY 'orderID' DESC limit 1 ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            
                while ($row = $result->fetch_assoc()) {
                    
                    return  $row['orderID'];
                    
                }
            } else {
                echo "0 results";
            }

            $conn->close();
    }
}
