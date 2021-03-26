<?php

namespace App\Models;
class MinistoreM extends \Core\Connect {

    function __construct() {
    }

    public function isMinistore($userID) {
        $conn=static::connectDB();
        $flag=0;

        $stmt = $conn->prepare("SELECT * FROM ministore WHERE userID= ?");
        $stmt->bind_param("s", $userID);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            if($result->num_rows>0){
                return 1;
                // return 0;
            }else{
                return 0;
            }
        }else{
            echo 'SQL Error';
        }
    }

    public function getMinistore($userID) {
        $conn=static::connectDB();
        // $userID="nothing";
        $stmt = $conn->prepare("SELECT * FROM ministore WHERE userID= ?");
        $stmt->bind_param("s", $userID);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            echo 'SQL Error';
        }
    }

    public function isNameUsed($storename){
        $conn=static::connectDB();
        $stmt = $conn->prepare("SELECT * FROM ministore WHERE name= ?");
        $stmt->bind_param("s", $storename);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            if($result->num_rows>0){
                return true;
            }else{
                return false;
            }
        }else{
            echo 'SQL Error';
        }
    }

    public function add($username, $storename, $desc, $font, $navColor, $buttonColor, $logoImage, $sliderImages) {
        $errorMssg="";
        $conn=static::connectDB();
        if (!$this->isNameUsed($storename)) {
            $errorMssg=$this->addMainImage($storename, $logoImage);
            $errorMssg=$this->addSliderImages($storename, $sliderImages);
            if ($errorMssg==""){
                $design=$font.", ".$navColor.", ".$buttonColor;
                $stmt = $conn->prepare("INSERT INTO ministore (name, Description, design, userID) VALUES ( ?, ?, ?, ?)");
                $stmt->bind_param("ssss", $storename, $desc, $design, $username);
                if ($stmt->execute()) {
                    // echo "m working";
                    $stmt->close();
                }else{
                    // echo 'm not working';
                    echo $stmt->error;
                    // return false;
                    $errorMssg="SQLError";
                }
            }
        }else{
            $errorMssg="Store Name Used";
        }
        return $errorMssg;
    }

    public function edit($username, $desc, $font, $navColor, $buttonColor, $logoImage, $sliderImages) {
        $errorMssg="";
        $conn=static::connectDB();
        // if (!$this->isNameUsed($storename)) {
        $result=$this->getMinistore($username);
        while($row = $result->fetch_assoc()){ 
            $errorMssg=$this->addMainImage($row["name"], $logoImage);
            $errorMssg=$this->addSliderImages($row["name"], $sliderImages);
        }
        if ($errorMssg=="" || $errorMssg=="Image not added"){
            $design=$font.", ".$navColor.", ".$buttonColor;
            $stmt = $conn->prepare("UPDATE ministore SET Description=?, design=? WHERE userID=?;");
            $stmt->bind_param("sss", $desc, $design, $username);
            if ($stmt->execute()) {
                // echo "m working";
                $stmt->close();
            }else{
                // echo 'm not working';
                echo $stmt->error;
                // return false;
                $errorMssg="SQLError";
            }
        }
        // }else{
        //     $errorMssg="Store Name Used";
        // }
        return $errorMssg;
    }

    public function addMainImage($storename, $logoImage) {

        // echo  "addImages method started\n";
        $errorMssg="";
        $target_dir = "images/Ministore/";
        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        if($logoImage['name']!=NULL){
            $temp = explode(".", $logoImage["name"]);
            $extension=end($temp);
            $extension = strtolower($extension);
            $logoImage["name"] = $storename."_logo_1.".$extension;
            $target_file = $target_dir . basename($logoImage['name']);
            //delete file if exist
            //unlink($target_file);
            // Select file type
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check extension
            if( in_array($imageFileType,$extensions_arr) ){
                // Upload file
                move_uploaded_file($logoImage['tmp_name'],$target_dir.$logoImage['name']);
                // echo count($sliderImages['name']);
                $errorMssg=$this->addSliderImages($storename, $sliderImages);
            }else{
                $errorMssg="Wrong File Format";
            }
        }else{
            $errorMssg="Image not added";
        }
        return $errorMssg;
    }

    public function addSliderImages($storename, $sliderImages) {
        // echo "slider method started\n";
        $errorMssg="";
        $target_dir = "images/Ministore/";
        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");
        // $images = array($sliderImages['name']);
        
        if($sliderImages['name'][0]!=NULL){
            if(count($sliderImages['name'])<=3){
                $no=1;
                foreach($sliderImages['name'] as $key=>$val){
                    echo "add slider working";
                    $temp = explode(".", $sliderImages['name'][$key]);
                    $extension=end($temp);
                    $extension = strtolower($extension);
                    $sliderImages['name'][$key] = $storename."_slider_".$no.".".$extension;
                    $target_file = $target_dir . basename($sliderImages['name'][$key]);
                    // delete file if exist
                    //unlink($target_file);
                    // Select file type
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    // Check extension
                    if( in_array($imageFileType,$extensions_arr) ){
                        // Upload file
                        // echo "uploading sliders\n";
                        move_uploaded_file($sliderImages['tmp_name'][$key],$target_dir.$sliderImages['name'][$key]);
                    }else{
                        $errorMssg="Wrong File Format";
                    }
                    $no++;
                }
            }else{
                $errorMssg="3 Slider images allowed";
            }
        }else{
            $errorMssg="Image not added";
        }
        return $errorMssg;
    }
   
}
    

