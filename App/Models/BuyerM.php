<?php

namespace App\Models;
use App\Models\Product as ModelsProduct;
class BuyerM extends \Core\Connect{
 
    function __construct() {
        
    }
    
    public function addBuyer($userID, $name, $status,$email, $password, $phoneNo, $age, $dob, $gender, $country, $district, $city, $line1, $line2) {

        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO buyer (userID, name, aLine1, aLine2,city,district, country, gender, age, status, dob, email, phoneNo, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssisssss", $userID, $name, $line1, $line2, $city,$district, $country, $gender, $age,$status, $dob, $email, $phoneNo, $password);
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
            
        }else{
            $result = 'Error sql';
            return $result;
        }
    }

    public function getCount() {
        $conn=static::connectDB();

        $stmt =$conn->prepare("SELECT COUNT(userID) FROM buyer;");
        
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }

    public function total_cal($value)
    {
        $conn=static::connectDB();

        $total=0.00;
        $prodPrice =0.00;
        $delivery  =0.00;

        $out =array();

        foreach ($value as $c) {
            $data =new ModelsProduct;
            $deliveryPrice = new Delivery;
            $list = $data->productDetails($c['ID']);
            
            while ($row = $list->fetch_assoc()) {
                $images = explode(',', $row['images']);
                array_push($out, array(
                    "ID" => $row['productID'],
                    "Q" => $c['Q'],
                    "name" => $row['prodName'],
                    "price" => $row['price'],
                    "image" =>$images[0]

                ));


            }

            $stmt0 = $conn->prepare("SELECT * from product where productID = ? "); // to be add delivery
            $stmt0->bind_param("i", $c['ID']);
            if ($stmt0->execute()) {
                $result = $stmt0->get_result();
                if ($result->num_rows >0) {
                    while ($row = $result->fetch_assoc()) {
                        $prodPrice= $row['price'];    
                    }
                }
                $total =(float)$total + (float)$prodPrice*$c['Q'] ;
                              
            }
        }
        
        $final_tot =$total+$delivery;
        
        return array ($total,$delivery,$final_tot,$out);
    }


    public function checkout($value,$endDis)
    {
        $conn=static::connectDB();
        $dID=0;
        $total=0.00;
        $prodPrice =0.00;
        $delivery  =0.00;
        $deadline_peroid =0;
        $out =array();

        foreach ($value as $c) {
            $data =new ModelsProduct;
            $deliveryPrice = new Delivery;
            $list = $data->productDetails($c['ID']);
            $price = $deliveryPrice->checkoutDelivery($c['ID'],$endDis);

            while ($row = $list->fetch_assoc()) {
                $dprice =0.00;
                $dperiod=0;
                
                $images = explode(',', $row['images']);


                while ($row2 = $price->fetch_assoc()) {
                    $dID=$row2['deliveryID'];
                    $dprice=$row2['price'];
                    $dperiod=$row2['dPeriod'];
                    if($deadline_peroid<$dperiod){
                        $deadline_peroid=$dperiod;
                    }
                    $delivery =$delivery + $dprice*$c['Q']  ;
                }
                array_push($out, array(
                    "ID" => $row['productID'],
                    "Q" => $c['Q'],
                    "name" => $row['prodName'],
                    "price" => $row['price'],
                    "image" =>$images[0],
                    "dID" =>$dID,
                    "dprice" =>$dprice,
                    "dperiod" =>$dperiod
                ));              
            }

            $stmt0 = $conn->prepare("SELECT * from product where productID = ? "); // to be add delivery
            $stmt0->bind_param("i", $c['ID']);
            if ($stmt0->execute()) {
                $result = $stmt0->get_result();
                if ($result->num_rows >0) {
                    while ($row = $result->fetch_assoc()) {
                        $prodPrice= $row['price'];   
                    }
                }
                
                $total =$total + (float)$prodPrice*$c['Q'] ;

                              
            }
        }
        $_SESSION['custom_1'] = $out;
        $final_tot = $total+$delivery;
        $PGfee=round(($final_tot)/100 *3.3 ,2);
        $final_tot =(float)$PGfee+(float)$final_tot;
        return array ($total,$delivery,$final_tot,$out,$PGfee,$deadline_peroid);
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
