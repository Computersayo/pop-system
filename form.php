
<div class="container">
 <div class="form">
	<div class="km">
		<form class="text-center border border-light p-5" action="login.php" method="POST">
			<p class="h4 mb-4"> sign in <img class="close" src="img/2.png"> </p><br>
			<div class="md-form">
				<label>Email:</label>
			<input type="email" id="defaultLoginFormEmail" name="Email" class="form-control mb-4" placeholder="E-mail" >
		    </div>
		    <div class="md-form">
		    	<label>Password:</label>
			<input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="password">
		    </div>
		    <div class="text-center">
		    	<button class="btn btn-info btn-block my-4  " type="submit"> sign in </button>
		    </div>
		</form>
	</div>
 </div>
</div>
<script>
	document.getElementById("login").addEventListener("click",function(){
		document.querySelector(".form").style.display="flex"
	})
	document.querySelector(".close").addEventListener("click",function(){
		document.querySelector(".form").style.display="none"
	})
</script>

<div class="register">
	<div class="card">
		<h5 class="card-header info-color white-text text-center py-4 " style="margin-right: 700px; width: 500px; background-color: grey; margin-top: 0"> <strong >sign up</strong> <img class="close2" src="img/3.png" style="margin-right: 110px; margin-top: 10px"></h5>
		<div class="card-body px-lg-5 pt-0" style="margin-right: 700px;">
			<form class="text-center" style="color: #757575" action="register.php" method="POST">
				<div class="form-row">
					<div class="col">
					<div class="md-form">
						<input type="text" name="Firstname" id="materialRegisterFormFirstName" class="form-control my-2" placeholder="Firstname" required>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col">
					<div class="md-form">
						<input type="text" name="Lastname" id="materialRegisterFormlastName" class="form-control my-2" placeholder="Lastname" required>
					</div>
					</div>
				</div>
					<div class="md-form">
						<input type="text" name="Email" id="materialRegisterFormEmail" class="form-control my-2" placeholder="E-mail" required>
					</div>
					<div class="md-form">
						<input type="password" name="password" id="materialRegisterFormPassword" class="form-control my-2" placeholder="password" required>
						<small class="form-text text-muted mb-4"> At least 8 characters and 1 digit</small>
					</div>
					<div class="md-form">
						<input type="text" name="phonenumber" id="materialRegisterFormPhonenumber" class="form-control my-2" placeholder="phonenumber" required>
					</div>
					<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> sign in</button>
					<p>Already registered:<a href="">sign up</a></p>
					<a  type="button" class="btn-floating btn-fb btn-sm"><i class="fab fa-facebook-f"></i></a>
			</form>
		</div>
	</div>
</div>
<script>
	document.getElementById("reg").addEventListener("click",function(){
		document.querySelector(".register").style.display="flex"
	})
	document.querySelector(".close2").addEventListener("click",function(){
		document.querySelector(".register").style.display="none"
	})
</script>
<div  class="card card2" style="margin-top: 10px;margin-left: 300px; display: none; background-color: #e6e6fa">
		<div class="head">
		<h5 class="card-header infor-color white-text text-center py-4"><strong>contact us <img class="max" src="img/1.png"></strong></h5>
	     </div>
		<div class="card-body px-lg-5 pt-0">
			<form class="text-center" style="color: #757575" action="reg.php" method="post">
				<div class="md-form mt-3">
					<input type="text" name="name" class="form-control my-2" placeholder="Your Name" required>
				</div>
				<div class="md-form ">
					<input type="text" name="email" class="form-control my-2" placeholder="Your Email" required>
				</div>
				<div class="md-form">
					<input type="text" name="subject" class="form-control my2" placeholder="subject" required>
				</div>
				<div class="md-form">
					<textarea type="text" name="message" class="form-control my-2 md-textarea" placeholder="message" rows="3" required></textarea>
				</div>
				<button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">send</button>
				<a href="">Alloyskebaso</a>
			</form>
		</div>		

	</div>
	<script>
     document.getElementById("contact").addEventListener("click",function(){
     	document.querySelector(".card2").style.display="flex"
     })
     document.querySelector(".max").addEventListener("click",function(){
     	document.querySelector(".card2").style.display="none"
     })

		

	</script>
