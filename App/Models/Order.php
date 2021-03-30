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

            $sql = "SELECT orderID FROM `order` ORDER BY orderID DESC limit 1 ";
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

    public function getOrderID()
    {
        $conn = static::connectDB();
        
        $sql = "SELECT orderID FROM `order` ORDER BY orderID DESC limit 1 ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            
                while ($row = $result->fetch_assoc()) {
                    
                    return  $row['orderID'];
                    
                }
            } else {
                echo "0 results";
            }
    }

    public function Ordersuccess($orderID)
    {
        $conn = static::connectDB();
        $status = "Success";
        $stmt = $conn->prepare("UPDATE `order` SET status = ? WHERE orderID = ? ");
        $stmt->bind_param("si",$status,$orderID);
        if($stmt->execute()){
            $result = $stmt->get_result();
            return $result;
        }else{
            
            $error = $conn->errno . ' ' . $conn->error;
            echo $error;
        }
    
    }

    public function getSuccessOrders($userID)
    {
        $conn = static::connectDB();
        $status="Success";
        $receiveStatus="Pending";
        $stmt = $conn->prepare("SELECT * FROM `order` AS orders LEFT JOIN prodsinorder on prodsinorder.orderID = orders.orderID WHERE buyUserID = ? AND status = ? AND prodsinorder.receiveStatus = ? GROUP by prodsinorder.orderID ORDER BY prodsinorder.orderID ASC");
        $stmt->bind_param("sss",$userID,$status,$receiveStatus);
        if($stmt->execute()){
            $result = $stmt->get_result();
            if ($result->num_rows >0) {
                return $result;

            }
        }else{
            
            $error = $conn->errno . ' ' . $conn->error;
            echo $error;
        }
    }
    public function productReceivedConfirmation($orderID,$prodID)
    {
        $conn = static::connectDB();
        
        $stmt = $conn->prepare("SELECT * from `prodsinorder` LEFT JOIN product on prodsinorder.productID =product.productID LEFT JOIN productimage ON productimage.productID = prodsinorder.productID AND productimage.imageCode LIKE '%main%' where prodsinorder.productID =? and prodsinorder.orderID= ?");
        $stmt->bind_param("ss",$orderID,$prodID);
        if($stmt->execute()){
            $result = $stmt->get_result();
            return $result;
        }else{
            
            $error = $conn->errno . ' ' . $conn->error;
            echo $error;
        } 
    }
    public function productReceived ($prodID,$orderID)
    {
        $conn = static::connectDB();
        $status = "Received";
        $stmt = $conn->prepare("UPDATE prodsinorder SET receiveStatus = ? WHERE orderID = ? AND productID = ?");
        $stmt->bind_param("sii",$status,$orderID,$prodID);
        if($stmt->execute()){
            $result = $stmt->get_result();
            return $result;
        }else{
            
            $error = $conn->errno . ' ' . $conn->error;
            echo $error;
        }
        
    }

    public function getCompletedOrders($userID)
    {
        $conn = static::connectDB();
        $status="Success";
        $receiveStatus="Received";
        $stmt = $conn->prepare("SELECT * FROM `order` AS orders LEFT JOIN prodsinorder on prodsinorder.orderID = orders.orderID WHERE buyUserID = ? AND status = ? AND prodsinorder.receiveStatus = ? GROUP by prodsinorder.orderID ORDER BY prodsinorder.orderID DESC");
        $stmt->bind_param("sss",$userID,$status,$receiveStatus);
        if($stmt->execute()){
            $result = $stmt->get_result();
            if ($result->num_rows >0) {
                return $result;

            }
        }else{
            
            $error = $conn->errno . ' ' . $conn->error;
            echo $error;
        }
    }
    public function getOrderproducts($userID)
    {
       
       $conn = static::connectDB();
  
        $receiveStatus="Pending";
        $status = "Success";
        $stmt0 = $conn->prepare("SELECT * FROM `prodsinorder` LEFT JOIN product ON product.productID = prodsinorder.productID LEFT JOIN productimage ON productimage.productID = prodsinorder.productID AND productimage.imageCode LIKE '%main%' WHERE orderID IN ( SELECT orderID FROM `order` WHERE buyUserID = ? AND status = ? ) AND receiveStatus = ?");
        $stmt0->bind_param("sss",$userID,$status,$receiveStatus);
        if($stmt0->execute()){

            $results=$stmt0->get_result();
            return $results;
            
        }     

    }
    public function getReceivedproducts($userID)

    {
       
       $conn = static::connectDB();
  
        $receiveStatus="Received";
        $status = "Success";
        $stmt0 = $conn->prepare("SELECT * FROM `prodsinorder` LEFT JOIN product ON product.productID = prodsinorder.productID LEFT JOIN productimage ON productimage.productID = prodsinorder.productID AND productimage.imageCode LIKE '%main%' WHERE orderID IN ( SELECT orderID FROM `order` WHERE buyUserID = ? AND status = ? ) AND receiveStatus = ?");
        $stmt0->bind_param("sss",$userID,$status,$receiveStatus);
        if($stmt0->execute()){

            $results=$stmt0->get_result();
            return $results;
            
        }     

    }
    public function OrderFailled($orderID)
    {
        $conn = static::connectDB();
        $stmt0 = $conn->prepare("DELETE FROM `order` WHERE `order`.`orderID` = ?");
        $stmt0->bind_param("i",$orderID);
        if($stmt0->execute()){
        }else {
            $error = $conn->errno . ' ' . $conn->error;
            echo $error;
        }
    }

    public function updateDelivery($data,$order_ID)
    {
        $conn = static::connectDB();
        $dispatchStatus	="Pending";
        $receiveStatus ="Pending";
        if (is_array($data) || is_object($data))
        {
            foreach ($data as $datas)
            {
                $stmt = $conn->prepare("INSERT INTO `prodsinorder` VALUES (?,?,?,?,?,?) ");
                $stmt->bind_param("iiiiss", $order_ID,$datas['ID'], $datas['dID'],$datas['Q'], $dispatchStatus, $receiveStatus);
                if ($stmt->execute()) {
                } else {
                    $error = $conn->errno . ' ' . $conn->error;
                    echo $error;
                }

            }
            return;
        }
                
    }

    public function getSellOrders($userID){
        $conn=static::connectDB();
        // $stmt = $conn->prepare("SELECT * FROM Feedback WHERE accountStatus = 'Pending'");
        $stmt = $conn->prepare("SELECT buyer.userID, `order`.deliveryAddress, `order`.amount
        FROM ((`order` 
        INNER JOIN buyer ON order.buyUserID = buyer.userID)
        INNER JOIN prodsinorder ON order.orderID = prodsinorder.orderID)
        WHERE prodsinorder.dispatchStatus = 'Pending' AND prodsinorder.productID = ANY (SELECT productID FROM product WHERE name = ANY (SELECT name FROM ministore WHERE userID= ?));");
        echo $conn->error;
        $stmt->bind_param("s", $userID);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }

}
