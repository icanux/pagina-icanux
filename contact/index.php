<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?=BASE_PATH?>" />
	<title>Icanux</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="static/img/HELMI1.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="static/contact/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="static/contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="static/contact/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="static/contact/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="static/contact/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="static/contact/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="static/contact/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="static/contact/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="static/contact/css/util.css">
	<link rel="stylesheet" type="text/css" href="static/contact/css/main.css">
<!--===============================================================================================-->
	 <link rel="stylesheet" type="text/css" href="static/css/styles.css">
  	<link rel="stylesheet" type="text/css" href="static/css/my-style.css">
</head>
<body>
  <?php require_once ('inc/header.php');?>
	<div class="map-background">
			<div class="container-contact100">

		<button class="contact100-btn-show">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</button>

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Contact Us
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>

		</div>
	</div>
	</div>




	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="static/contact/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="static/contact/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="static/contact/vendor/bootstrap/js/popper.js"></script>
	<script src="static/contact/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="static/contact/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="static/contact/vendor/daterangepicker/moment.min.js"></script>
	<script src="static/contact/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="static/contact/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	
	<script src="static/contact/js/main.js"></script>

<script type="text/javascript" src="static/js/efectos.js"></script>
  <script type="text/javascript" src="static/js/ed-grid.js"></script>
  <script type="text/javascript">
edgrid.menu('nav','menu');
</script>

</body>
</html>
