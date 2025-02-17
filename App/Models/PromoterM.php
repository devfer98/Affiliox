<?php

namespace App\Models;
class PromoterM extends \Core\Connect {

    function __construct() {
        
    }
    
    public function addPromoter($userID, $name, $status,$email, $password, $phoneNo, $age, $dob, $gender, $country, $city, $line1, $line2,$accountStatus,$arrs) {
        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO promoter (userID, name, aLine1, aLine2, city, country, gender, age, status, dob, email, phoneNo, password,accountStatus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssissssss", $userID, $name, $line1, $line2, $city, $country, $gender, $age,$status, $dob, $email, $phoneNo, $password,$accountStatus);
        if ($stmt->execute()) {
            $stmt->close();

            foreach($arrs as $key=>$value){
                $stmt = $conn->prepare("INSERT INTO promoterchn (userID,channel) VALUES (?, ?)");
                $stmt->bind_param("ss", $userID,$value);
                if ($stmt->execute()) {
                }else{
                    echo 'SQL2 Error';
                    return false;
                }
              }
        }else{
            echo 'SQL1 Error';
            return false;
        }

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
    

    public function addLinksPromo($link, $date, $userID) {

        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO prolink (link, date, userID) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $link, $date, $userID);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        }else{
            echo 'SQL Error';
            return false;
        }
    }

    public function getLinksPromo($userID)  {
        $conn=static::connectDB();

        $query = "select * from prolink WHERE userID = ?";
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s",$userID);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0 ){
                return $result;
            } else {
                $result = null;
                return  $result ;
            }
        } 
    }

    public function getProductDetails(){
        $conn=static::connectDB();

        $query = "select * from product LEFT JOIN productimage on product.productID = productimage.productID AND productimage.imageCode LIKE '%main%' WHERE status = 'Active' AND comRate > 0";
        
        $stmt = $conn->prepare($query);

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


    public function getproductFeatures($prodID){
        $conn = static::connectDB();
        $stmt0 = $conn->prepare("SELECT * FROM product LEFT JOIN productimage ON product.productID = productimage.productID AND productimage.imageCode LIKE '%main%' WHERE product.productID = ?");
        $stmt0->bind_param("i", $prodID);
        if ($stmt0->execute()) {
            $result = $stmt0->get_result();
            
            if ($result->num_rows >0) {
                return $result;
            }
            
        } else {
            $error = "Invalid product request";
            return $error;
        }
       
       
    }


    public function getUniqueLink($prodID){
        $conn = static::connectDB();
        $stmt0 = $conn->prepare("SELECT * FROM product WHERE product.productID =?");
    
        $stmt0->bind_param("i", $prodID);
        if ($stmt0->execute()) {
            $result = $stmt0->get_result();
            
            if ($result->num_rows >0) {
                return $result;
            }
            
        } else {
            $error = "Invalid product ID and promoter ID";
            return $error;
        }
        
       
    }

    public function getStaticPromo($userID)  {
        $conn=static::connectDB();

        $query = "SELECT * FROM `order` WHERE proUserID = ? AND status = 'Success'";
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s",$userID);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0 ){
                return $result;
            } else {
                $result = null;
                return  $result ;
            }
        } 
    }

    public function getTotalCommission($userID) {
        $conn=static::connectDB();

        $query = "SELECT SUM(totalCommission) AS total FROM `order` WHERE proUserID = ? AND status = 'Success'";
    
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s",$userID);

        if ($stmt->execute()) {
            $result1 = $stmt->get_result();
            
            if ($result1->num_rows > 0 ){
                return $result1;
            } else {
                $result1 = null;
                return  $result1 ;
            }
        } 
    }

    public function getTotalLinks($userID) {
        $conn=static::connectDB();

        $query = "SELECT COUNT(DISTINCT link ) AS num_of_links FROM prolink WHERE userID = ? GROUP By userID";
    
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s",$userID);

        if ($stmt->execute()) {
            $result2 = $stmt->get_result();
            
            if ($result2->num_rows > 0 ){
                return $result2;
            } else {
                $result2 = null;
                return  $result2 ;
            }
        } 
    }

    public function getMarketLatestProduct() {
        $conn=static::connectDB();
  
          $query = "SELECT * FROM `product` LEFT JOIN productimage ON productimage.productID = product.productID AND productimage.imageCode LIKE '%main%' WHERE status= 'Active' ORDER BY product.productID DESC limit 10";
          
          $stmt = $conn->prepare($query);
  
          if ($stmt->execute()) {
              $result1 = $stmt->get_result();
              
              if ($result1->num_rows >0)
              {
                  return $result1;
              }
              
          }else{
              $result1 = 'Error sql';
              return $result1;
          }
     }

     public function getMarketFeaturedProduct() {
        $conn=static::connectDB();
  
          $query = "SELECT * FROM `product` LEFT JOIN productimage ON productimage.productID = product.productID AND productimage.imageCode LIKE '%main%' WHERE status= 'Active' ORDER BY product.productID ASC limit 10";
          
          $stmt = $conn->prepare($query);
  
          if ($stmt->execute()) {
              $result2 = $stmt->get_result();
              
              if ($result2->num_rows >0)
              {
                  return $result2;
              }
              
          }else{
              $result2 = 'Error sql';
              return $result2;
          }
     }

     public function updatePromoter($ID, $name,$phoneNo, $country,$status, $city, $aLine1, $aLine2 ) {
        $conn=static::connectDB();
        $stmt = $conn->prepare("UPDATE promoter SET name= ? , aLine1 = ?, aLine2= ?,city= ?, country= ?,status = ?, phoneNo=  ?  WHERE userId=?");
        $stmt->bind_param("ssssssss",$name,$aLine1, $aLine2,$city,$country, $status,$phoneNo,$ID);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        }else{
            echo 'SQL Error';
            return false;
        }
    }

    public function removePromoter() {

    }

    public function getPromoters() {

    }

    public function getPending() {
        $conn=static::connectDB();

        $stmt = $conn->prepare("SELECT * FROM promoter WHERE accountStatus = 'Pending'");
        // $stmt->bind_param("s", "Pending");
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }

    public function getActive() {
        $conn=static::connectDB();
                // $flag=0;

                $stmt = $conn->prepare("SELECT * FROM promoter WHERE accountStatus = 'Active'");
                // $stmt->bind_param("s", "Pending");
                if($stmt->execute()){
                    $result = $stmt->get_result();
                    $stmt->close();
                    return $result;
                }else{
                    echo 'SQL Error';
                }
    }

    public function getBanned() {
        $conn=static::connectDB();
                // $flag=0;

                $stmt = $conn->prepare("SELECT * FROM promoter WHERE accountStatus = 'Banned'");
                // $stmt->bind_param("s", "Pending");
                if($stmt->execute()){
                    $result = $stmt->get_result();
                    $stmt->close();
                    return $result;
                }else{
                    echo 'SQL Error';
                }
    }

    public function getStatistics() {

    }

    public function updateStatus($userID, $status) {
        $conn=static::connectDB();
        $accStatus;
        if($status==1){
            $accStatus="Active";
        }elseif($status==2){
            $accStatus="Rejected";
            // echo $accStatus;  
        }else{

        }
        $stmt = $conn->prepare("UPDATE promoter SET accountStatus = ? WHERE userID = ?");
        $stmt->bind_param("ss", $accStatus, $userID);
        if($stmt->execute()){
            $stmt->close();
        }else{
            echo 'SQL Error';
        }
    }

    public function banStatus($userID, $status) {
        $conn=static::connectDB();
        $accStatus;
        if($status==1){
            $accStatus="Active";
        }elseif($status==2){
            $accStatus="Banned";
            // echo $accStatus;  
        }else{

        }
        $stmt = $conn->prepare("UPDATE promoter SET accountStatus = ? WHERE userID = ?");
        $stmt->bind_param("ss", $accStatus, $userID);
        if($stmt->execute()){
            $stmt->close();
        }else{
            echo 'SQL Error';
        }
    }

    public function UnbanStatus($userID, $status) {
        $conn=static::connectDB();
        $accStatus;
        if($status==1){
            $accStatus="Banned";
        }elseif($status==2){
            $accStatus="Active";
            // echo $accStatus;  
        }else{

        }
        $stmt = $conn->prepare("UPDATE promoter SET accountStatus = ? WHERE userID = ?");
        $stmt->bind_param("ss", $accStatus, $userID);
        if($stmt->execute()){
            $stmt->close();
        }else{
            echo 'SQL Error';
        }
    }

    public function getCount() {
        $conn=static::connectDB();

        $stmt =$conn->prepare("SELECT COUNT(userID) FROM promoter WHERE accountStatus='Active';");
        
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }

    public function getBanCount() {
        $conn=static::connectDB();

        $stmt =$conn->prepare("SELECT COUNT(userID) FROM promoter WHERE accountStatus='Banned';");
        
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }

    public function getPromoteCount() {
        $conn=static::connectDB();

        $stmt =$conn->prepare("SELECT COUNT(userID) FROM promote;");
        
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }

    public function getClickCount() {
        $conn=static::connectDB();

        $stmt =$conn->prepare("SELECT SUM(noClicks) FROM promote;");
        
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }

    function EmailCompair($email,$username){

        $conn=static::connectDB();
      
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
