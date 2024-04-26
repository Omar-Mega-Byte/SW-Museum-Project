<!DOCTYPE html>
<html>

<head>
	<title>Registration Form</title>
	<link rel="icon" href="Data/OIG.jpg" />
	<style>
		@import url("https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Fjalla+One&family=Sedgwick+Ave+Display&family=Yanone+Kaffeesatz:wght@200;300;400;500;600;700&display=swap");

		body {
			background-image: url("../Data/Login Wallpaper.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			font-family: "Yanone Kaffeesatz", sans-serif;
			font-size: large;
			color: aliceblue;
		}

		form {
			color: rgb(255, 255, 255);
			text-shadow: 1px 1px #010318;
			font-family: "Yanone Kaffeesatz", sans-serif;
			font-size:large;
			background-color: rgba(0, 0, 0, 0.153);
			border: 1px solid #ffffff27;
			border-radius: 5px;
			margin: 40px auto;
			padding: 30px;
			width: 400px;
		}

		button {
			background-color: #ffffff;
			color: rgb(0, 0, 0);
			padding: 5px;
			margin:10px auto auto 170px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: small;
		}

		button:hover {
			background-color: #f5f5f5;
			color: #dfd4b2d3;
		}

		h1 {
			text-align: center;
		}

		a {
			color: #dfd4b2d3;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

		input[type="email"],
		input[type="password"],
		input[type="text"] {
			width:fit-content;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
	</style>
</head>

<body>
	<section>
		<form method="POST" action="../Controllers/Register.php" autocomplete="off">
			<div>
				<h2>Register</h2>
				<label for="username"><b>User Name</b></label>
				<br>
				<input type="text" placeholder="Enter User name" name="username" required >
				<br>
				<label for="email"><b>email</b></label>
				<br>
				<input type="email" placeholder="Enter email" name="email" required >
				<br>
				<label for="password"><b>Password</b></label>
				<br>
				<input type="password" placeholder="Enter Password" name="password" required id="myInput" ><br>
				<label for="checkbox"><b>Show Password</b></label>
				<input type="checkbox" onclick="myFunction()">
				<script>
					function myFunction() {
						var x = document.getElementById("myInput");
						if (x.type === "password") {
							x.type = "text";
						} else {
							x.type = "password";
						}
					}
				</script><br>
				<button type="submit">Register</button>
				<h4>
					already have an accont?<a class="new" href="Login.html">Login Now!</a>
				</h4>
			</div>
		</form>
		<br />
	</section>
	<br />
</body>

</html>