<?php
namespace App\Models;
class Category extends \Core\Connect{

    function __construct() {
    }
    
    // public function addFeedback($message,$rating,$username,$prodID) {
        
    //     $conn=static::connectDB();
    //     $reply="no";
    //     $stmt = $conn->prepare("INSERT INTO feedback (reply,comment,rating,userID,productID) VALUES (?, ?, ?, ?, ?)");
    //     $stmt->bind_param("ssdss",$reply,$message,$rating,$username,$prodID);
    //     if ($stmt->execute()) {

    //         $stmt->close();
    //         return true;
    //     }else{
    //     echo $stmt->error;
    //         return false;
    //     }
    // }

    public function getCategories() {
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
