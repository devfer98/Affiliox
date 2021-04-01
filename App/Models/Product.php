<?php

namespace App\Models;
class Product extends \Core\Connect {

    public $lastProID;

    function __construct() {
    }

    public function updateStatus($productID, $status){

    }

    public function add( $prodName, $availQuantity, $description, $status, $price, $comRate, $name, $catID, $mainImage, $otherImages) {
        
        $errorMssg="";
        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO product (prodName,availQuantity,description,status,price,overallRating,comRate,name,catID) VALUES ( ?, ?, ?, ?, ?, 0.0, ?, ?, ?)");
        $stmt->bind_param("sissddsi", $prodName, $availQuantity, $description, $status, $price, $comRate, $name, $catID);
        if ($stmt->execute()) {
            // echo "m working";
            $productID = mysqli_insert_id($conn);
            $this->lastProID = $productID;
            // session_start();
            // $_SESSION["lastProID"] = $productID;
            $stmt->close();
            $errorMssg=$this->addImages($productID, $mainImage, $otherImages);
            // if($this->addImages($productID, $mainImage, $otherImages)){
            //     return true;
            // }else{
            //     return false;
            // }
        }else{
            // echo 'm not working';
            echo $stmt->error;
            // return false;
            $errorMssg="SQLError";
        }
        return $errorMssg;
    }

    // public function total_cal($value)
    // {
    //     $conn=static::connectDB();
    //     $total=0.00;
    //     $prodPrice =0.00;
    //     $delivery  =350.00;

    //     foreach ($value as $c) {
    //         $stmt0 = $conn->prepare("SELECT  price from product where productID = ? "); // to be add delivery
    //         $stmt0->bind_param("i", $c['productID']);
    //         if ($stmt0->execute()) {
    //             $result = $stmt0->get_result();
    //             if ($result->num_rows >0) {
    //                 while ($row = $result->fetch_assoc()) {
    //                     $prodPrice= $row['price'];    
    //                     echo  $prodPrice; 
    //                 }
    //             }
    //             $total =(float)$total + (float)$prodPrice*$c['quantity'] ;
    //             echo $total;                
    //         }
    //     }
        
    //     $final_tot =$total+$delivery;
        
    //     return array ($total,$delivery,$final_tot);
    // }

    public function productDetails($prodID)
    {
        $conn = static::connectDB();
        $stmt0 = $conn->prepare("SELECT product.* , FORMAT(product.price,2) as price ,GROUP_CONCAT( productimage.imageCode ORDER BY productimage.imageCode) AS images  FROM product LEFT JOIN productimage ON product.productID = productimage.productID  where product.productID=?");
        
        $stmt0->bind_param("i", $prodID);
        if ($stmt0->execute()) {
            $result = $stmt0->get_result();
            
            if ($result->num_rows >0) {   
                return $result;
            }
            
        } else {
            $error = "Invalid product ID";
            return $error;
        }
    }

    public function productprice($prodID)
    {
        $conn = static::connectDB();
        $stmt0 = $conn->prepare("SELECT product.* ,GROUP_CONCAT( productimage.imageCode ORDER BY productimage.imageCode) AS images  FROM product LEFT JOIN productimage ON product.productID = productimage.productID  where product.productID=?");
        
        $stmt0->bind_param("i", $prodID);
        if ($stmt0->execute()) {
            $result = $stmt0->get_result();
            
            if ($result->num_rows >0) {   
                return $result;
            }
            
        } else {
            $error = "Invalid product ID";
            return $error;
        }
    }
    public function feedbackDetails($prodID)
    {
        $conn = static::connectDB();
        $stmt0 = $conn->prepare("SELECT * FROM feedback WHERE feedback.productID =?");
        $stmt0->bind_param("i", $prodID);
        if ($stmt0->execute()) {
            $result = $stmt0->get_result();
            
            if ($result->num_rows >0) {
                return $result;
            }
            
        } else {
            $error = "Invalid Feedback request";
            return $error;
        }
    }
    public function addFailedproducts($data)
    {
        $conn=static::connectDB();
      if (is_array($data) || is_object($data))
        {
            foreach ($data as $datas)
            {
                $stmt = $conn->prepare("UPDATE product SET availQuantity =availQuantity + ? WHERE productID =? ");
                $stmt->bind_param("ii",$datas['Q'],$datas['ID']);
                if ($stmt->execute()) {
                } else {
                    $error = $conn->errno . ' ' . $conn->error;
                    echo $error;
                }

            }
            return 1;
        }       

    }
    public function subProducts($value)
    { 
        $conn=static::connectDB();
        $pass =1;
        $quantity=0;
        
        foreach ($value as $c) {
          
            $stmt =$conn->prepare("SELECT availQuantity FROM product WHERE productID = ?");
            $stmt->bind_param("i", $c['ID']);

            if($stmt->execute()){
                $result = $stmt->get_result();
                while($row= $result->fetch_assoc()){
                    $quantity= $row['availQuantity'];
                    if(0>($quantity-$c['Q'])){
                        $pass=0;
                    }
                }
                
            }else{
                echo 'SQL Error';
            }
        }
        if($pass == 0){
            return 0;
            
        }

        foreach ($value as $c) {
            
            $stmt1 =$conn->prepare("UPDATE  product SET availQuantity= availQuantity-? WHERE productID = ?");
            $stmt1->bind_param("ii", $c['Q'],$c['ID']);
            if($stmt1->execute()){

            }else{
                echo 'SQL error';
            }
        }

        return 1;


    }
    public function related($prodID)
    {
        $conn = static::connectDB();
        $result=$this->productDetails($prodID);
        $cat=0;
        while ($row = $result->fetch_assoc()) {
            $cat= $row['catID']."<br>";
        }
        $stmt1 = $conn->prepare("SELECT * FROM product WHERE catID = ? ORDER BY RAND() LIMIT 3");
        $stmt1->bind_param("i", $cat);
        if ($stmt1->execute()) {
            $result = $stmt1->get_result();
            
            if ($result->num_rows >0) {
                $i=0;
                while ($row = $result->fetch_assoc()) {
                    $pic[$i]=$row['productID'];
                    $i++;
                }
                return $pic;
            }
            
        } else {
            $error = "Invalid CAT ID";
            return $error;
        }
    }
    
    public function addImages($productID, $mainImage, $otherImages) {
        
        $conn=static::connectDB();
        // $noError = true;
        $errorMssg="";
        $target_dir = "images/upload/";
        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        $temp = explode(".", $mainImage["name"]);
        $extension=end($temp);
        $mainImage["name"] = $productID."_main_1.".$extension;
        
        $target_file = $target_dir . basename($mainImage['name']);
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            // Insert record
            $stmt = $conn->prepare("INSERT INTO productimage (productID, imageCode) VALUES ( ?, ?)");
            $stmt->bind_param("is", $productID, $mainImage['name']);
            if ($stmt->execute()) {
                $stmt->close();
                // Upload file
                move_uploaded_file($mainImage['tmp_name'],$target_dir.$mainImage['name']);
                // $noError=true;
            }else{
                // echo "m not working";
                echo $stmt->error;
                // $noError=false;
                $errorMssg="SQLError";
            }
        }else{
            // $noError=false;
            $errorMssg="Wrong File Format";
        }

        if(count($otherImages['name'])<=5){
            $no=1;
            foreach($otherImages['name'] as $key=>$val){
                $temp = explode(".", $otherImages["name"][$key]);
                $extension=end($temp);
                $otherImages["name"][$key] = $productID."_other_".$no.".".$extension;
                $target_file = $target_dir . basename($otherImages['name'][$key]);
                // Select file type
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                // Check extension
                if( in_array($imageFileType,$extensions_arr) ){
                    // Insert record
                    $stmt = $conn->prepare("INSERT INTO productimage (productID, imageCode) VALUES ( ?, ?)");
                    $stmt->bind_param("is", $productID, $otherImages['name'][$key]);
                    if ($stmt->execute()) {
                        $stmt->close();
                        // Upload file
                        move_uploaded_file($otherImages['tmp_name'][$key],$target_dir.$otherImages['name'][$key]);
                        // $noError=true;
                    }else{
                        // echo "m not working";
                        echo $stmt->error;
                        // $noError=false;
                        $errorMssg="SQL Error";
                    }
                }else{
                    // $noError=false;
                    $errorMssg="Wrong File Format";
                }
                $no++;
            }
        }else{
            $errorMssg="5 Other images allowed";
        }

        // return $noError;
        return $errorMssg;
    }

    public function getStorePros($userID){
        $conn=static::connectDB();
        // $stmt = $conn->prepare("SELECT * FROM Feedback WHERE accountStatus = 'Pending'");
        $stmt = $conn->prepare("SELECT productimage.imageCode, product.prodName, product.price, product.productID
        FROM (product
        INNER JOIN productimage ON product.productID = productimage.productID)
        WHERE productimage.imageCode LIKE '%_main_1%' 
        AND product.productID = ANY (SELECT productID FROM product WHERE name = ANY (SELECT name FROM ministore WHERE userID= ?));");
        echo $conn->error;
        $stmt->bind_param("s", $userID);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }

    public function edit($productID, $availQuantity) {
        $errorMssg="";
        $conn=static::connectDB();
        $stmt = $conn->prepare("UPDATE product SET availQuantity=? WHERE productID=?;");
        $stmt->bind_param("ss", $availQuantity, $productID);
        if ($stmt->execute()) {
            // echo "m working";
            $stmt->close();
        }else{
            // echo 'm not working';
            echo $stmt->error;
            // return false;
            $errorMssg="SQLError";
        }
        return $errorMssg;
    }

   
}
    

