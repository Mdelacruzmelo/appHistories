<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>History Board App</title>
		<meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		<!-- Index CSS -->
		<link href="css/index.css" rel="stylesheet" type="text/css"/>

	</head>

	<body>
		<div id="container" class="container bg-light position-relative">

			<div id="loginContainer" class="col-lg-3 col-md-4 col-sm-8 ml-lg-4 p-0 overflow-hidden rounded3rem">
				<svg id="circleRegister" 
									class="position-absolute p-0">
				<circle/>
				</svg>
				<svg id="circleLogin" 
									class="position-absolute p-0">
				<circle/>
				</svg>
				<!--				<form name="login" method="POST">-->
				<div class="col-12 text-center position-relative">
					<div class="my-4">
						<span class="actionTitle" id="spanLogin">Login</span>
						<span class="actionTitle" id="spanRegister">Register</span>
					</div>
				</div>
				<div class="form-group row mt-3">
					<!--						<div class="col-1 mt-2 ml-2 p-0 pt-1">
												<label for="email_login" class="widthHeight1rem rounded-circle bg-success float-right"></label>
											</div>-->
					<div class="col-12 p-0 px-5">
						<input type="email" 
													class="form-control myInput1"
													id="email_login" 
													aria-describedby="emailHelp" 
													placeholder="Enter email">
						<small id="emailHelp" 
													class="form-text text-muted d-none">
							Email does not exist.
						</small>
					</div>

				</div>

				<div class="form-group row mt-3">
					<!--						<div class="col-1 mt-2 ml-2 p-0 pt-1">
												<label for="password_login" class="widthHeight1rem rounded-circle bg-success float-right"></label>
											</div>-->
					<div class="col-12 p-0 px-5">
						<input type="password" 
													class="form-control myInput1"
													id="password_login" 
													aria-describedby="passwordHelp" 
													placeholder="Password">
						<small id="passwordHelp" 
													class="form-text text-muted d-none">
							Incorrect password
						</small>
					</div>
				</div>

				<div class="col-12 position-relative d-flex flex-wrap justify-content-between mb-3">
					<button id="registerButton" class="circlebtn mt-2">
						<i class="fas fa-user-plus"></i>
					</button>
					<button id="loginButton" class="circlebtn circlebtn2 mt-2">
						<i class="fas fa-user"></i>
					</button>
					<button id="goButtonLogin" class="circlebtn mt-2">
						<i class="fas fa-sign-in-alt"></i>
					</button>
					<button id="goButtonRegister" class="circlebtn mt-2">
						<i class="fas fa-envelope"></i>
					</button>
				</div>

				<!--				</form>-->

			</div>
		</div>
		<script src="js/index.js" type="text/javascript"></script>
	</body>

</html>
