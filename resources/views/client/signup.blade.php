<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="front-end/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="front-end/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="front-end/login/fonts/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="front-end/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="front-end/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="front-end/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="front-end/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="front-end/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="front-end/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="front-end/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="front-end/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('front-end/login/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{url('/create_account')}}" method="POST">
					{{ csrf_field() }}
					<a href="{{url('/')}}">
						<span class="login100-form-logo">
							<i class="zmdi zmdi-landscape"></i>
						</span>
					</a>

					<span class="login100-form-title p-b-34 p-t-27">
						Signup
					</span>

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{$error}}</li>
								@endforeach
							</ul>
						</div>
					@endif

					@if (Session::has('status'))
						<div class="alert alert-success">
							{{Session::get('status')}}
						</div>
					@endif

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="email" name="email" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign up
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="{{url('/login1')}}">
							You already have an account? LOG-IN
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="front-end/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="front-end/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="front-end/login/vendor/bootstrap/js/popper.js"></script>
	<script src="front-end/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="front-end/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="front-end/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="front-end/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="front-end/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="front-end/login/js/main.js"></script>

</body>
</html>