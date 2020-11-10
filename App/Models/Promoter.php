<?php

namespace App\Models;
class Promoter extends \Core\Connect {

    function __construct() {
        
    }
    
    public function addPromoter($userID, $name, $status,$email, $password, $phoneNo, $age, $dob, $gender, $country, $city, $line1, $line2) {
        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO promoter (userID, name, aLine1, aLine2, city, country, gender, age, status, dob, email, phoneNo, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssisssss", $userID, $name, $line1, $line2, $city, $country, $gender, $age,$status, $dob, $email, $phoneNo, $password);
        if ($stmt->execute()) {
            return true;
            $stmt->close();
        }else{
            echo 'SQL Error';
            return false;
        }
    }

    public function updatePromoter() {

    }

    public function removePromoter() {

    }

    public function getPromoter() {

    }

    public function getPromoters() {

    }

    public function getPending() {

    }

    public function getStatistics() {

    }
    
}
