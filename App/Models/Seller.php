<?php

class Seller {

    function __construct() {
        include ("php/connect.php");
    }
    
    
    
    /*
     * 
     */
    public function addSeller($userID, $name, $email, $password, $phoneNo, $age, $dob, $gender, $country, $city, $line1, $line2, $storeName) {
        // $query="insert into buyer values ('".$userID."', '".$name."', '".$line1."', '".$line2."', '".$city."', 
        // '".$country."', '".$gender."', '".$age."', 'active', '".$dob."', '".$email."', '".$phoneNo."', '".$password."', 
        // '".$storeName."', 'good', 0)";
                
        // mysqli_query($conn,$query)or die (mysqli_error($conn));
        echo "seller model called";
        // $stmt = $conn->prepare("INSERT INTO buyer (userID, name, aLine1, aLine2, city, country, gender, age, status, dob, email, phoneNo, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ' ', 0)");
        // $stmt->bind_param("sssssssisssss", $userID, $name, $line1, $line2, $city, $country, $gender, $age, $dob, $email, $phoneNo, $password, $storeName);
        // if ($stmt->execute()) {
        //     return true;
        //     // $stmt->bind_result($result);
        // }else{
        //     return false;
        // }
    }

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
    
}
