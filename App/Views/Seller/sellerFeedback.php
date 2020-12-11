<!DOCTYPE html>
<html>
<head>
	<title>Seller Feedback</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
	<link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/market.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/sellerProfile.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/sellerFeedback.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet">
	<script src="/js/Seller/common-dashboard.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
	<div id="main" class="container navigation">
		<div class="row row-padding">	
			<!-- <div class="col12 center title">
				<p>Review Feedbacks</p>
			</div>  

			<div class="feedback row col8 col-center inner-part">
				<table id="overall-review-table">
				<tr>
					<th>Value</th>
					<th>Rated Method</th>
					<th>Percentage</th>
				</tr>
				<tr>            
					<td>Excellent</td>
					<td><i id="star" class="fas fa-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
					<td>60%</td>
					</tr>
					<tr>
					<td>Great</td>
					<td><i id="star" class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"></td>
					<td>10%</td>
					</tr>
					<tr>
					<td>Average</td>
					<td><i id="star" class="fas fa-star"><i class="fas fa-star"></td>
					<td>15%</td>
					</tr>
					<tr>
					<td>Poor</td>
					<td><i id="star" i class="fas fa-star-half-alt"></i></td>
					<td>10%</td>
					</tr>
					<tr>
					<td style="border: none;">Bad</td>
					<td style="color: red;border: none;">Not Rated</td>
					<td style="border: none;">5%</td>
					</tr>
				</table>
			</div>  -->

			<div class="col12 center title" style="margin-bottom: 15px;">
				<p>Customer Reviews Feedbacks</p>
			</div> 

			<?php 
				if(isset($this->buyerFeedbacks) and !empty($this->buyerFeedbacks) and $this->buyerFeedbacks->num_rows>0){
                while($row = $this->buyerFeedbacks->fetch_assoc()){
					echo '<div class="col8 col-center inp boxsummery commonB" style="margin-bottom: 20px;">
					<form action="../Seller/addReply" method="post">
						<div class="row col12">
							<h3 class="center">'.$row['prodName'].' - '.$row['userID'].'</h3>
						</div>
						<div class="row">
						<div class="col6 padding col-center">
							<label>Comment</label><br/>
							<textarea readonly type="text" id="Birth" name="comment" placeholder="'.$row['comment'].'"></textarea>
						</div>
						<div class="col2 padding fitcontent col-center">
							<label>Rating</label><br/>
							<input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 50px;" placeholder="'.$row['rating'].'">
						</div>
						</div>
						<div class="row">
						<div class="col6 padding fitcontent col-center">
							<label>Reply</label><br/>
							<input type="text" id="Birth" name="reply">
						</div>
						</div>
						<input type="hidden" name="feedbackID" value="'.$row['feedbackID'].'" />
						<div class="row col12 padding"><button class="center" type="submit" value="submit">Send</button></div>
					</form>
					</div>';
				}
				}else{
					echo '<div class="col8 col-center inp boxsummery commonB" style="margin-bottom: 20px; height: 150px;">
						<div class="row col12">
							<h3 class="center">No Buyer Feedbacks</h3>
						</div>
					</div>';
                }    		
			?>

			<!-- <div class="col8 col-center inp boxsummery commonB" style="margin-bottom: 20px;">
				<form action="" method="post">
					<div class="row col12">
						<h3 class="center">Nike Shoe - John Smith</h3>
					</div>
					<div class="row">
					<div class="col6 padding">
						<p class="center">very very happy whit this seller,come to Badulla in 2 days,everithing he wrote is corect,th you seller a lot</p>
					</div>
					<div class="col6 padding fitcontent">
						<label>Reply</label><br/>
						<input type="text" id="Birth" name="dob" placeholder="">
					</div>
					</div>
					<div class="row col12 padding"><button class="center" type="submit" value="submit">Send</button></div>
				</form>
			</div> -->
			
		</div>
	</div> 

</body>
</html>