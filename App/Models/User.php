<?php

namespace App\Models;


class User extends \Core\Connect{

                

            public function authenticate($username, $password) {
               
                $conn=static::connectDB();
                $flag=0;

                $stmt = $conn->prepare("SELECT * FROM buyer WHERE userID = ? AND password= ?");
                $stmt->bind_param("ss", $username, $password);
                if($stmt->execute()){

                    $result = $stmt->get_result();
        
                     if($result->num_rows === 0 ){
                        $flag=0;
                     }else{
                        $flag=1;
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["type"] = 'buyer';
                        return $flag;
                        
                     }
                }
                $stmt = $conn->prepare("SELECT * FROM seller WHERE userID = ? AND password= ? AND accountStatus = ?");
                $accStats='Active';
                $stmt->bind_param("sss", $username, $password,$accStats);
               //  $stmt->bind_param("iii", $username, $password,$accStats);
                if($stmt->execute()){

                    $result = $stmt->get_result();
        
                     if($result->num_rows === 0 ){
                        $flag=0;
                     }else{
                        $flag=2;
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["type"] = 'seller';
                        return $flag;
                     }
              }

              $stmt = $conn->prepare("SELECT * FROM promoter WHERE userID = ? AND password= ? AND accountStatus = ?");
              $accStats='Active';
              $stmt->bind_param("sss", $username, $password,$accStats);
              if($stmt->execute()){

                  $result = $stmt->get_result();
      
                   if($result->num_rows === 0 ){
                      $flag=0;
                   }else{
                      $flag=3;
                      session_start();
                      $_SESSION["username"] = $username;
                      $_SESSION["type"] = 'promoter';
                      return $flag;
                   }
            }

            $stmt = $conn->prepare("SELECT * FROM admin WHERE userID = ? AND password= ?");
            
            $stmt->bind_param("ss", $username, $password);
            if($stmt->execute()){

                $result = $stmt->get_result();
    
                 if($result->num_rows === 0 ){
                    $flag=0;
                 }else{
                    $flag=4;
                    session_start();
                    $_SESSION["username"] = $username;
                    $_SESSION["type"] = 'admin';
                    return $flag;
                 }
          }

        
            }

            function PW_EmailCompair($input){

               $conn=static::connectDB();
      
                $stmt0 = $conn->prepare('select * from promoter where email = ?');
                $stmt1 = $conn->prepare('select * from buyer where email = ?');
                $stmt2 = $conn->prepare('select * from seller where email = ?');
                $stmt3 = $conn->prepare('select * from admin where email = ?');
                $stmt0->bind_param("s",$input);
                $stmt1->bind_param("s",$input);
                $stmt2->bind_param("s",$input);
                $stmt3->bind_param("s",$input);
                   if($stmt1->execute()){
                      $result= $stmt1->get_result();
                      if($result->num_rows ==1){
                        while ($row = $result->fetch_assoc()) {
                          //row
                       }   
                        return true;
                      }else{
                        return false;
                      }
                   }
   
           }

           function Emailcompair($input,$pass){

            $conn=static::connectDB();
             $accstatus='Active';
             $stmt0 = $conn->prepare("SELECT* FROM promoter WHERE email = ? AND accountStatus=?");
             $stmt1 = $conn->prepare("SELECT* FROM buyer WHERE email = ? ");
             $stmt2 = $conn->prepare("SELECT* FROM seller WHERE email = ? AND accountStatus=?");
             $stmt3 = $conn->prepare("SELECT* FROM admin WHERE email = ?");
             $stmt0->bind_param("ss", $input, $accstatus);
             $stmt1->bind_param("s",$input);
             $stmt2->bind_param("ss",$input,$accstatus);
             $stmt3->bind_param("s",$input);
                if($stmt1->execute()){
                   $result= $stmt1->get_result();
                   if($result->num_rows ==1){
                     while ($row = $result->fetch_assoc()) {
                       $row['password']=$pass;
                    }   
                     return true;
                   }else{
                     return false;
                   }
                }

        }

                     

            
            

    
    }


