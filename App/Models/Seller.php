<?php

namespace App\Models;
class Seller extends \Core\Connect {

    function __construct() {
        // include ("php/connect.php");
    }
    
    public function addSeller($userID, $name, $status,$email, $password, $phoneNo, $age, $dob, $gender, $country, $city, $line1, $line2,$storeName,$accStatus,$wCount) {

        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO seller (userID, name, aLine1, aLine2, city, country, gender, age, status, dob, email, phoneNo, password,storeName,accountStatus,warningCount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssisssssssi", $userID, $name, $line1, $line2, $city, $country, $gender, $age,$status, $dob, $email, $phoneNo, $password,$storeName,$accStatus,$wCount);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        }else{
            echo 'SQL Error';
            return false;
        }
    }
    // public function addSeller($userID, $name, $email, $password, $phoneNo, $age, $status, $dob, $gender, $country, $city, $line1, $line2, $storeName) {
    //     // $query="insert into buyer values ('".$userID."', '".$name."', '".$line1."', '".$line2."', '".$city."', 
    //     // '".$country."', '".$gender."', '".$age."', 'active', '".$dob."', '".$email."', '".$phoneNo."', '".$password."', 
    //     // '".$storeName."', 'good', 0)";
                
    //     // mysqli_query($conn,$query)or die (mysqli_error($conn));
    //     $conn=static::connectDB();
    //     $stmt = $conn->prepare("INSERT INTO seller (userID, name, aLine1, aLine2, city, country, gender, age, status, dob, email, phoneNo, password, storeName, accountStatus, warningCount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ' ', 0)");
    //     $stmt->bind_param("sssssssissssss", $userID, $name, $line1, $line2, $city, $country, $gender, $age, $status, $dob, $email, $phoneNo, $password, $storeName);
    //     if ($stmt->execute()) {
    //         $stmt->close();
    //         return true;
    //         // $stmt->bind_result($result);
    //     }else{
    //         return false;
    //     }
    // }

    public function updateSeller($userID, $name, $email, $phoneNo, $country, $city, $line1, $line2) {
        
    }

    public function removeSeller() {
        
    }

    public function getSeller() {
        
    }

    public function getSellers() {
        echo "seller model called";
    }

    public function getPending() {
        
    }

    public function getStatistics() {
        
    }

    function EmailCompair($email,$username){

        $conn=static::connectDB();
      
         $stmt1 = $conn->prepare('select * from buyer where email = ?   OR userID = ?');
         $stmt0 = $conn->prepare('select * from promoter where email = ?  OR userID = ?');
         $stmt2 = $conn->prepare('select * from seller where email = ?  OR userID = ?');
         $stmt3 = $conn->prepare('select * from admin where email = ?  OR userID = ?');
         $stmt0->bind_param("ss",$email,$username);
         $stmt1->bind_param("ss",$email,$username);
         $stmt2->bind_param("ss",$email,$username);
         $stmt3->bind_param("ss",$email,$username);
         if($stmt0->execute()){

            $stmt0->store_result();

             if($stmt0->num_rows > 0 ){
                 return false;
             }
        }  
        if($stmt1->execute()){

            $stmt1->store_result();

             if($stmt1->num_rows > 0 ){
                 return false;
             }
        } 
        if($stmt2->execute()){

            $stmt2->store_result();

             if($stmt2->num_rows > 0 ){
                 return false;
             }
        }
        if($stmt3->execute()){

            $stmt3->store_result();

             if($stmt3->num_rows > 0 ){
                 return false;
             }
        }  
            return true;
            

    }
}
    

