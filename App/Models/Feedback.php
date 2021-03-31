<?php
namespace App\Models;
class Feedback  extends \Core\Connect{

    function __construct() {
    }
    
    public function addFeedback($message,$rating,$username,$prodID) {
        
        $conn=static::connectDB();
        $reply=NULL;
        $stmt = $conn->prepare("INSERT INTO feedback (reply,comment,rating,userID,productID) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdsd",$reply,$message,$rating,$username,$prodID);
        if ($stmt->execute()) {

            $stmt->close();
            return true;
        }else{
        echo $stmt->error;
            return false;
        }
    }

    public function addRating($prodID) {
        $conn=static::connectDB();
        $rating =0;
        $stmt = $conn->prepare("SELECT avg(rating) AS OverallRating,productID FROM `feedback` WHERE productID= ?");
        $stmt->bind_param("i",$prodID);
        if($stmt->execute()){
            $result = $stmt->get_result();
            while ($row=$result->fetch_assoc()) {
                $rating = $row['OverallRating'];
                echo $rating;
            }      
        }else{
            echo 'SQL Error';
        }

        $stmt0 = $conn->prepare("UPDATE product SET overallRating = ? WHERE productID = ?");
        $stmt0->bind_param("di",$rating,$prodID);
        if ($stmt0->execute()) {
            $stmt0->close();
        }
    }
    

    public function addReply($feedbackID, $reply) {
        $conn=static::connectDB();
        $stmt = $conn->prepare("UPDATE feedback SET reply = ? WHERE feedbackID = ?");
        $stmt->bind_param("ss", $reply, $feedbackID);
        if($stmt->execute()){
            $stmt->close();
        }else{
            echo 'SQL Error';
        }
    }

    public function getFeedSell($userID) {
        $conn=static::connectDB();

        // $stmt = $conn->prepare("SELECT * FROM Feedback WHERE accountStatus = 'Pending'");
        $stmt = $conn->prepare("SELECT product.prodName, buyer.userID, feedback.comment, feedback.rating, feedback.feedbackID FROM ((feedback
        INNER JOIN buyer ON feedback.userID = buyer.userID)
        INNER JOIN product ON feedback.productID = product.productID)
        WHERE feedback.reply = '' AND feedback.productID = ANY (SELECT productID FROM product WHERE name = ANY (SELECT name FROM ministore WHERE userID= ?));");
        $stmt->bind_param("s", $userID);
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

    public function getFeedbacks($userID) {
        
        $conn=static::connectDB();
        $stmt = $conn->prepare("SELECT * FROM `feedback` LEFT JOIN product ON product.productID = feedback.productID LEFT JOIN productimage ON productimage.productID = feedback.productID AND productimage.imageCode LIKE '%main%' WHERE userID =? order by feedbackID DESC");
        $stmt->bind_param("s", $userID);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;

        }else{
            echo 'SQL Error';
        }

    }

    public function getSeller() {

    }
    
}
