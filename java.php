<!DOCTYPE html>
<html>
<head>
	<title>javas pop up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
	
	<div class="container">
		<h1> popup login</h1>
		<a href="#" class="button" id="but">LOGIN</a>
	</div>
	<div class="popup">	
		<div class="mum">
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
	</div>
	<script>
		document.getElementById("but").addEventListener("click", function(){
			document.querySelector(".popup").style.display="flex"
			})
		document.querySelector(".img2").addEventListener("click",function(){
			document.querySelector(".popup").style.display="none"
			})
		
	</script>
	

</body>
</html>