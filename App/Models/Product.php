<?php

namespace App\Models;
class Product extends \Core\Connect {

    static $lastProID;

    function __construct() {
    }

    public function add( $prodName, $availQuantity, $description, $price, $comRate, $name, $catID, $mainImage, $otherImages) {
        
        $errorMssg="";
        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO product (prodName,availQuantity,description,status,price,overallRating,comRate,name,catID) VALUES ( ?, ?, ?, 'available', ?, 0.0, ?, ?, ?)");
        $stmt->bind_param("sisddsi", $prodName, $availQuantity, $description, $price, $comRate, $name, $catID);
        if ($stmt->execute()) {
            // echo "m working";
            $productID = mysqli_insert_id($conn);
            $lastProID = $productID;
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
                while ($row = $result->fetch_assoc()) {
                    echo $row['prodName']."<br>";
                }
                return $result;
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

   
}
    

