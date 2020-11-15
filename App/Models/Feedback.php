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

    public function getFeedSell() {

    }

    public function getProduct() {

    }

    public function getFeedbacks() {

    }

    public function getSeller() {

    }
    
}
