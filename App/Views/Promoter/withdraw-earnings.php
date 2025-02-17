<!DOCTYPE html>
<html>
<head>
	<title>Withdraw Earnings</title>
	<link rel="stylesheet" type="text/css" href="/css/promoter/withdraw-earnings-css.css">
	<link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	<script src="/js/promoter/withdraw-earnings-js.js"></script>
</head>
<body>
	
	<div class="container">
		<h2><i class="fas fa-money-check-alt"></i>&nbsp; &nbsp;Transaction Management</h2>

		<p><b>Withdraw Earnings:</b> Use this page to transfer your balance to your preferred method of payout. You should have minimum payout amount available in your account. To see the list and status of your payouts. 
		<a id="payout-history" href="../Promoter/transHistory">CLICK HERE <i class="fas fa-history"></i></a></p>
		
		<div class="error-msg">
			<p><?php if(isset($this->errmsg) and !empty($this->errmsg)){echo $this->errmsg;}  ?></p>
		</div>
		<div class="success-msg">
			<p><?php if(isset($this->successmsg) and !empty($this->successmsg)){echo $this->successmsg;}  ?></p>
		</div>
		
		<div class="money-withdrawal-form">
		
			<form method="post" action="../Promoter/promoterTransToDB">
			
				<table>
					
                      <tr>

                          <td class = td1>Total Commission Earned :</td>

                          <td><?php echo number_format($this->UImsg2,2)?> Rs </td>

                    </tr>
					
					<tr>
						<td class = td1>Change Amount :</td>
						<td><input type="number" name="ammount"  id="c-a" step="0.01"  min="0"></td>
					</tr>

					<tr>
						<td colspan =2> *By requesting a transfer you agree with Affiliox.com terms and conditions.</td>
					</tr>
					<tr>
					<td>
						<button type="submit" name="submit" onclick="return confirm('Are you want to actually transfer this amount ?')">Transfer</button>
						
					</td>
					<td>
						<button type="reset">Cancel</button>
					</td>
				</tr>
			</table>
			
			</form>
			
		</div> <!-- money-withdrawal-form -->
		</div> <!-- container -->
		<hr style="height:2px;border:none;color:#333;background-color:#333;">
	

		<!-- bottom-part-------------------------------------------->
		

</body>
</html>


