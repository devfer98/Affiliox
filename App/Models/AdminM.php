<?php
namespace App\Models;
class AdminM extends \Core\Connect{
    function __construct() {
     //  include ("php/connect.php");
    }
    
    public function addAdmin($userID, $name, $status,$email, $password, $phoneNo, $age, $dob, $gender, $country, $city, $line1, $line2,$position) {

        $conn=static::connectDB();
        //$createdUser=$_SESSION['username'];
        $stmt = $conn->prepare("INSERT INTO admin (userID, name, aLine1, aLine2, city, country, gender, age, status, dob, email, phoneNo, password, position) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssissssss", $userID, $name, $line1, $line2, $city, $country, $gender, $age,$status, $dob, $email, $phoneNo, $password, $position);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        }else{
            echo 'SQL Error';
            return false;
        }
    }

    public function getAdmin($userID){
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

    public function getCount() {
        $conn=static::connectDB();

        $stmt =$conn->prepare("SELECT COUNT(userID) FROM admin;");
        
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }

    public function updatePassword($current_passs,$new_pass,$username)
    {
        $conn=static::connectDB();
        $query = "select * from admin WHERE userID = ? && password =? ";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss",$username,$current_passs);
        if ($stmt->execute()) {
            $result = $stmt->get_result(); 
            if ($result->num_rows >0) {
                $query2 = "UPDATE admin SET password=? WHERE userID=?";
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

    public function updateAdmin($userID, $name, $email, $phoneNo, $country, $city, $line1, $line2, $position) {
        
    }
    
    // public function updateAdmin($data)
    // {
       
    //     $id = $data['userID'];
    //     $name = $data['name'];
    //     $status = $data['status'];
    //     $email = $data['email'];
    //     $phoneNo = $data['phoneNo'];
    //     $age = $data['age'];
    //     $dob = $data['dob'];
    //     $country = $data['country'];
    //     $city = $data['city'];
    //     $aLine1 = $data['aLine1'];
    //     $aLine2 = $data['aLine2'];
    //     $position = $data['position'];
       
    //     $conn=static::connectDB();
    //     $query = "UPDATE admin SET name='$name',status='$status',email='$email',phoneNo='$phoneNo', age='$age',dob='$dob', gender='$gender', 
    //     country='$country', city='$city', aLine1='$line1', aLine2='$line2', position='$position', WHERE userID='$userID'";
    //     $stmt = $conn->prepare($query);
    //     $stmt->bind_param("ssssissssssss", $name, $status, $email, $phoneNo, $age, $dob, $gender, $country, $city, $line1, $line2, $position, $userID);
    //     if ($stmt->execute()) {
    //         $stmt->close();
    //         return true;
    //     }else{
    //         echo 'SQL Error';
    //         return false;
    //     }
    // }
    
    public function getStatistics() {

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
