<!DOCTYPE html>
<html>
<head>
	<title>Generate Link</title>
	<link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="/css/promoter/generate-link-css.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
  <link href="https:/fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
  <script src="/js/promoter/generate-link-js.js"></script>
</head>
<body>
	
	     <div class="container">
          <h2><i class="fas fa-link"></i></i>&nbsp; &nbsp;Generate Link</h2>

        <div class="area">
            <label>Encrypted Link:</label> <br> <br>
            <input type="text" name="link" id="myInput" placeholder="You can Copy this Link">
            <button onclick="myFunction()">Copy <i class="far fa-copy"></i></button>

            <p>This allows you to add your link to the database for future promotions.</p><br>

                <div class="error-msg">
                  <p><?php if(isset($this->errmsg) and !empty($this->errmsg)){echo $this->errmsg;}  ?></p>
                </div>
                <div class="success-msg">
                  <p><?php if(isset($this->successmsg) and !empty($this->successmsg)){echo $this->successmsg;}  ?></p>
                </div>

            <form method="post" action="../Promoter/promoterLinkToDB">
              <input type="text" name="link">
              <button type="submit" name="submit" onclick="return confirm('Your link was successfully added to the database.')">Upload <i class="fas fa-upload"></i></button>
            </form>

        </div> <!-- area -->	
        </div> <!-- container -->
        <hr style="height:2px;border:none;color:#333;background-color:#333;">

	     
        <!-- bottom-part-------------------------------------------->
        

</body>
</html>