<?php

namespace App\Models;
class AdminM extends \Core\Connect{
 
    function __construct() {
        
    }
    
    public function getAdminProfile($userID){
        $conn=static::connectDB();

        $query = "select * from admin WHERE userID = ?";
        
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