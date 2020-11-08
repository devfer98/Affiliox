<?php

class Customer  extends \Core\Connect{

    private $conn;

    function __construct() {
        $conn = static::getDB();
    }
    
    public function addBuyer($userID, $name, $status,$email, $password, $phoneNo, $age, $dob, $gender, $country, $city, $line1, $line2) {
        // $addBuyer="insert into buyer values ('".$userID."', '".$name."', '".$line1."', '".$line2."', '".$city."', 
        // '".$country."', '".$gender."', '".$age."', 'active', '".$dob."', '".$email."', '".$phoneNo."', '".$password."')";
                
        // mysqli_query($conn,$addBuyer)or die (mysqli_error($conn));

        $stmt = $conn->prepare("INSERT INTO buyer (userID, name, aLine1, aLine2, city, country, gender, age, status, dob, email, phoneNo, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssissss", $userID, $name, $line1, $line2, $city, $country, $gender, $age, $dob, $email, $phoneNo, $password);
        if ($stmt->execute()) {
            $stmt->bind_result($result);

            
           
            
        }else{
            return false;
        }
    }

    public function updateBuyer($userID, $name, $email, $phoneNo, $country, $city, $line1, $line2) {
        $updateBuyer = "update buyer SET name='".$name."',aLine1='".$line1."', aLine2='".$line2."', city='".$city."'
        , country='".$country."', email='".$email."', phoneNo='".$phoneNo."' WHERE userID='".$userID."'";

        mysqli_query($conn,$updateBuyer)or die (mysqli_error($conn));
    }

    public function removeBuyer($userID) {
        $query = "update buyer SET status='removed' WHERE userID='".$userID."'";

        mysqli_query($conn,$query)or die (mysqli_error($conn));
    }

    public function getBuyer($userID) {
        $query = "select emp_id from buyer WHERE userID = '".$userID."'";
        $buyer = mysqli_query($conn,$query);

        return $buyer;
    }
    
    function EmailCompair($email){

        
        $stmt = $conn->prepare("select * from buyer where email = '".$email."'");
        $stmt->bind_param("s",$email);
        if ($stmt->execute()) {
           
            $stmt->bind_result($result);
            $numRows =$stmt->num_rows;
            if($numRows == 0){
                return true;
            }else{
                return false;
            }
        }else{
            return false;

        }

    }
    
}
