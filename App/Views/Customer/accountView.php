<html>

<head>
	<title>Affiliox-account-profile</title>
	<link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
	<script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
	<!---Navigation bar-------------------------------------------->

	<!---Content -------------------------------------------->
	<div class="container">
		

		<div class="row">
			<div class="row  marginb50 margint50">
				<h2 class="marginl100"><i class="fas fa-user"></i>&nbsp; &nbsp;Profile Details</h2>
				<div class="col12">
					<div class="hrCustom">
						<hr />
					</div>
				</div>
			</div>
			<div class="errorMsg">
                <p><?php if(isset($this->UImsg) and !empty($this->UImsg)){

			
					
					}  ?></p>
            </div>
			<div class="row">
				<table class="profileTable">
					<tr>
						<td id="td-1">Your Name:</td>
						<td>Sample name is here</td>
					</tr>
					<tr>
						<td id="td-1">Username:</td>
						<td>Sample Username is here</td>
					</tr>
					<tr>
						<td id="td-1">Password:</td>
						<td> ********** </td>
					</tr>

					<tr>
						<td id="td-1">Date of Birth:</td>
						<td>Sample DOB is here</td>
					</tr>
					<tr>
						<td id="td-1">Gender:</td>
						<td>Sample Gender is here</td>
					</tr>
					<tr>
						<td id="td-1">Primary Email:</td>
						<td>sample@gmail.com</td>
					</tr>
					<tr>
						<td id="td-1">Mobile Number:</td>
						<td>Sample number is here</td>
					</tr>
					<tr>
						<td id="td-1">Address:</td>
						<td>Sample address is here</td>
					</tr>
					<tr>
						<td id="td-1">Country:</td>
						<td>Sample state is here</td>
					</tr>


				</table>
				</div>
				<div class="center margint20 marginb50">
				<form>
					
					<button type="submit" name="edit-details" value="update-details">Change password</button>
					<button type="submit" name="edit-details" value="update-details">Edit Details</button>

				</form>
			</div>	
		</div>
	</div>

	<!---Bottom part-------------------------------------------->
</body>

</html>