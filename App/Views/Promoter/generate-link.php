<!DOCTYPE html>
<html lang="en">
<head>
      <title>Generate Link</title>
      <link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
      <link rel="stylesheet" type="text/css" href="/css/promoter/generate-link-css.css">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
      <script src="/js/promoter/generate-link-js.js"></script>
</head>
<body>
      <div class="container">
      <h2><i class="fas fa-link"></i></i>&nbsp; &nbsp;Generate Link <a href="../Promoter/market">Go Back / Exit</a></h2>
      
          <?php  
                if(isset($this->UImsg) and !empty($this->UImsg)){
				    
                    while($row = $this->UImsg->fetch_assoc()){         
          ?>
           
          <table class=linkArea>        
            <tr>
                <td class="topic">Generated Link</td>
            </tr>
            <?php  
                if(isset($this->UImsg1) and !empty($this->UImsg1)){
				    
                    while($row1 = $this->UImsg1->fetch_assoc()){         
            ?>
            <tr>
                <td class="topic">This Allows You to Copy & Save Your Link for Future Promotions.</td>
            </tr>
            <tr>
                <td>
                        
                <form method="post" action="../Promoter/promoterLinkToDB">
                    <input type="text" name="link" id="myInput" value="http://localhost/product/view?id=<?php echo $row['productID']?>&promid=<?php echo strtolower($row1['userID']) ?>" readonly >
                    <button type="submit" name="submit" onclick="myFunction()">Copy <i class="far fa-copy"></i></button>
                </form>
                </td>
            </tr>
            <?php
                  }
                }
            ?>
            </table>
            <?php
                  }
                }
            ?>
            
            <div class="error-msg">
                <p><?php if(isset($this->errmsg) and !empty($this->errmsg)){echo $this->errmsg;}  ?></p>
            </div>
            <div class="success-msg">
                <p><?php if(isset($this->successmsg) and !empty($this->successmsg)){echo $this->successmsg;}  ?></p>
            </div>
             
        </div> <!-- container -->              
      <hr style="height:2px;border:none;color:#333;background-color:#333;">
</body>
</html>
