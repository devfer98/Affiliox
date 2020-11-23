<?php

namespace App\Models;
class PromoterProfile extends \Core\Connect{
 
    function __construct() {
        
    }
    
    public function getPromoterProfile($userID){
        $conn=static::connectDB();

        $query = "select * from promoter WHERE userID = ?";
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s",$userID);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            if ($result->num_rows >0)
            {
                return $result;
            }
            
        }else{
            $result = 'Error sql';
            return $result;
        }
    }

        
}