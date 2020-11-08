<?php

namespace App\Models;


class User extends \Core\Connect{

                
    
            public function save()
            {   
                $stmt = $mysqli->prepare("INSERT INTO buyer (userID, name, email, password, phoneNo, age, dob, gender, country, city, line1, line2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sss", $_POST['name'], $_POST['age']);
                $stmt->execute();
                $stmt->close();
            }
    
    }


