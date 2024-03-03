<?php require '../Templates/Header.php';
require '../Templates/Nav.php' ?>

<link rel="stylesheet" href="../css/login-style.css">
<!DOCTYPE html>
<html>

<head>
	<title>Login/Signup Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container">
		<div class="form-container sign-up-container">
			<form action="save_vendor_info.php" method="post">
				<h1>Create Account as vendor</h1>
				<input type="text" name="name" placeholder="Business Name" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="password" placeholder="Password" required>
				<select name="category" id="category">
					<option value="All">Choose your category</option>
					<option value="Catering">Catering</option>
					<option value="Photography">Photography</option>
					<option value="Event Management">Event Management</option>
					<option value="Decorators">Decorators</option>
					<option value="Event Hall">Event Hall</option>
				</select>
				<input type="text" name="contact_name" placeholder="Contact Name" required>
				<input type="text" name="phone_number" placeholder="Phone Number" required>
				<input type="text" name="address" placeholder="Business Address" required>
				
				
				<button>Sign Up</button>
			</form>

		</div>
		<div class="form-container sign-in-container">
			<form action="vendor_login_check.php" method="post">
				<h1>Vendor Login </h1>
				<input type="email" name="vendor_email" placeholder="Email" required>
				<input type="password" name="vendor_password" placeholder="Password" required>
				<button>Login</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<h5 style="margin : 2px"> New Vendor?</h1> <button class="ghost" id="signIn">Sign UP</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Vendor!</h1>
					<p>Enter your details and start managing your business with us</p>
					<h5 style="margin : 2px"> Alredy a vendor? </h1> <button class="ghost" id="signUp">Login</button>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>

</html>


<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.querySelector('.container');

	// Show sign-up form
	signUpButton.addEventListener('click', () => {
		container.classList.add('right-panel-active');
	});

	// Show sign-in form
	signInButton.addEventListener('click', () => {
		container.classList.remove('right-panel-active');
	});

</script>

<?php require '../Templates/footer.php'; ?>