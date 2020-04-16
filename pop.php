<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<h2>popup Form</h2>
<p>click on the "open Form" button to open the popup form.</p>
<div class="open-btn">
	<button class="open-button" onclick="openForm()">
		<strong>open Form</strong>
	</button>
</div>
<div class="login-popup">
	<div class="form-popup" id="popupForm">
		<form action="action_page.php" class="form-container">
			<h2>please login</h2>
			<label for="Email"><strong>Email</strong></label>
			<input type="text" name="Email" id="email" placeholder="Your Email" required>
			<label for="psw"><strong>password</strong></label>
			<input type="password" name="password" id="psw" placeholder="Your password" required>
			<button type="submit" class="btn">Login</button>
			<button type="button" class="btn cancel" onclick="closeForm">close</button>
		</form>
	</div>
</div>
<script >
	function openForm(){
		document.getElementByid("popupForm").style.display="block";
	}
	function closeForm()
	 {
	document.getElementByid("popupForm").style.display="none";
	}
</script>
<script type="boot/js/bootstrap.min.js"></script>
<script type="boot/js/jquery-3.3.1.min.js"></script>
</body>
</html>
<div class="card">	
		<h5 class="card-header info-color white-text text-center py-4 my-2" style="background: blue">
			<strong> sign in</strong> <img class="img2"  src="img/1.png"></h5>
			<div class="card-body px-lg-5 pt-0">
			<form class="text-center" style="color: #757575" action="java.php">	
				<div class="md-form">
				<input type="text"  name="username" id="materialLoginFormUsername"  class="form-control my-2">
				<label for="materialLoginFormUsername">Username</label>	
				</div>
				<div class="md-form">
				<input type="text"  name="password" id="materialLoginFormPassword"  class="form-control my-2">
				<label for="materialLoginFormPassword">Password</label>	
				</div>
				<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> sign in	</button>

			</form>	

			</div>
		
	</div>
