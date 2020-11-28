<?php

namespace App\Models;
class BuyerM extends \Core\Connect{
 
    function __construct() {
        
    }
    
    public function addBuyer($userID, $name, $status,$email, $password, $phoneNo, $age, $dob, $gender, $country, $city, $line1, $line2) {

        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO buyer (userID, name, aLine1, aLine2, city, country, gender, age, status, dob, email, phoneNo, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssisssss", $userID, $name, $line1, $line2, $city, $country, $gender, $age,$status, $dob, $email, $phoneNo, $password);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        }else{
            echo 'SQL Error';
            return false;
        }
    }

    public function updateBuyer($userID, $name, $email, $phoneNo, $country, $city, $line1, $line2) {
        // $updateBuyer = "update buyer SET name='".$name."',aLine1='".$line1."', aLine2='".$line2."', city='".$city."'
        // , country='".$country."', email='".$email."', phoneNo='".$phoneNo."' WHERE userID='".$userID."'";
        // mysqli_query($conn,$updateBuyer)or die (mysqli_error($conn));
    }

    public function updatePassword($current_passs,$new_pass,$username)
    {
        $conn=static::connectDB();
        $query = "select * from buyer WHERE userID = ? && password =? ";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss",$username,$current_passs);
        if ($stmt->execute()) {
            $result = $stmt->get_result(); 
            if ($result->num_rows >0) {
                $query2 = "UPDATE buyer SET password=? WHERE userID=?";
                $stmt2 = $conn->prepare($query2);
                $stmt2->bind_param("ss",$new_pass,$username);
                if ($stmt2->execute()) {
                    return true;
                }else
                    return false;
            }else{
                return false;
            }
        }
    }

    public function removeBuyer($userID) {
        // $query = "update buyer SET status='removed' WHERE userID='".$userID."'";

        // mysqli_query($conn,$query)or die (mysqli_error($conn));
    }

    public function getBuyer($userID) {
        
        $conn=static::connectDB();

        $query = "select * from buyer WHERE userID = ?";
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s",$userID);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            if ($result->num_rows >0)
            {
                return $result;
                // while($row = $result->fetch_assoc()){   

                //    return  $row['userID'];  
                // }
            }
               

            // while ($row = $result->fetch_assoc()) {
            //     // $arry['username'] = $row['userID'];
            //     // $arry['fullname'] = $row['name'];
            //     // $arry['address1'] = $row['aLine1'];
            //     // $arry['address2'] = $row['aLine2'];
            //     // $arry['city'] = $row['city'];
            //     // $arry['country'] = $row['country'];
            //     // $arry['gender'] = $row['gender'];
            //     // $arry['age'] = $row['age'];
            //     // $arry['marital'] = $row['status'];
            //     // $arry['dob'] = $row['dob'];
            //     // $arry['gender'] = $row['gender'];
            //     // $arry['email'] = $row['email'];
            //     // $arry['num'] = $row['phoneNo'];
                
            // }
            
        }else{
            $result = 'Error sql';
            return $result;
        }
    }
    
    function EmailCompair($email,$username){

        $conn=static::connectDB();
         $VAR=10;
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
