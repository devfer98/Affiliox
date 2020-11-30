<?php
namespace App\Models;
class Feedback  extends \Core\Connect{

    function __construct() {
    }
    
    public function addFeedback($message,$rating,$username,$prodID) {
        
        $conn=static::connectDB();
        $reply="no";
        $stmt = $conn->prepare("INSERT INTO feedback (reply,comment,rating,userID,productID) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss",$reply,$message,$rating,$username,$prodID);
        if ($stmt->execute()) {
            return true;
            $stmt->close();
        }else{
            echo $message;
            echo $rating;
            echo $username;
            echo $prodID;
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
            echo 'SQL Error <br />';
            // echo $stmt->error;
            return false;
        }
    }
    

    public function addReply() {

    }

    public function getFeedSell($userID) {
        $conn=static::connectDB();

        $stmt = $conn->prepare("SELECT * FROM Feedback WHERE accountStatus = 'Pending'");
        $stmt = $conn->prepare("SELECT product.prodName, buyer.name, feedback. FROM feedback
        INNER JOIN buyer ON feedback.userID = buyer.userID)
        INNER JOIN product ON feedback.productID = product.productID)
        WHERE feedback.productID = ANY (SELECT ProductID FROM OrderDetails WHERE Quantity = 10);");
        $stmt->bind_param("s", "Pending");
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }

    public function getProduct() {

    }

    public function getFeedbacks() {

    }

    public function getSeller() {

    }
    
}
