<!DOCTYPE html>
<html>
<title>Support Service</title>
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/promoter/support-center-css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	<script src="/js/promoter/support-center-js.js"></script>
</head>
<body>
	
		<!-- inner part of the evry dashboard -->
	<div class="container">
		<h2><i class="fas fa-ticket-alt"></i>&nbsp; &nbsp;Support Center - Submit Your Requset</h2>
		<div class="inner-part">
			<h3>Important</h3>
			<p>You can submit your Account Issues or Authentication Issues, Payment Issues, Suggestions, 
				Account Cancellations or other issues with us at any time to any promoter you have registered 
				with our system. We look forward to providing you with an efficient service.</p>
			<form action="../Promoter/market" method="post">
				<select name="problem" id="problem" required="">
					<option value="">Pleace Select Your Request</option>
					<option value="Account Problem">Account Problem</option>
					<option value="Verification Problem">Verification Problem</option>
					<option value="Payout Problem">Payout Problem</option>
					<option value="Suggestion">Suggestion</option>
					<option value="Account Cancellation">Account Cancellation</option>
					<option value="Other">Other</option>
				</select> <br>
				<div class="text-area">
					<textarea name="textdata" placeholder="Explain your problem" required=""></textarea>
				</div> <br>
				<div class="button">
					<button type="submit" onclick="return confirm('We received your Request. We will let you know more by email.');"><i class="fas fa-share"></i>  Send Request</button>
				</div>
			</form>
		</div> <!-- inner-part -->
		</div> <!-- container -->
		<hr style="height:2px;border:none;color:#333;background-color:#333;">
	

		<!-- bottom-part-------------------------------------------->
		
</body>
</html>

