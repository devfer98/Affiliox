<?php

namespace App\Models;
class PromoterProfile extends \Core\Connect{
 
    function __construct() {
        
    }
    
    public function getPromoterProfile() {

        $conn=static::connectDB();
        $sql = "SELECT * FROM promoter WHERE userID = '{$_SESSION["userID"]}' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                $_SESSION['name'] = $row["name"];
                $_SESSION['dob'] = $row["dob"];
                $_SESSION['userID'] = $row["userID"];
                $_SESSION['email'] = $row["email"];
                $_SESSION['phoneNo'] = $row["phoneNo"];
                $_SESSION['aLine'] = $row["aLine1"];
                $_SESSION['country'] = $row["country"];
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }

    
    
    
}
