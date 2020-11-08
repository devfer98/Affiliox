<?php

class Seller {

    function __construct() {
        include ("php/connect.php");
    }
    
    
    
    /*
     * 
     */
    public function addSeller($userID, $name, $email, $password, $phoneNo, $age, $dob, $gender, $country, $city, $line1, $line2, $storeName) {
        $query="insert into buyer values ('".$userID."', '".$name."', '".$line1."', '".$line2."', '".$city."', 
        '".$country."', '".$gender."', '".$age."', 'active', '".$dob."', '".$email."', '".$phoneNo."', '".$password."', 
        '".$storeName."', 'good', 0)";
                
        mysqli_query($conn,$query)or die (mysqli_error($conn));
    }

    public function updateSeller($userID, $name, $email, $phoneNo, $country, $city, $line1, $line2) {
        
    }

    public function removeSeller() {
        
    }

    public function getSeller() {
        
    }

    public function getSellers() {
        
    }

    public function getPending() {
        
    }

    public function getStatistics() {
        
    }
    
}
