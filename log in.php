<!DOCTYPE html>
<html lang="en">
	
	<head>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		
		<title>login</title>
		
		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		
		<!-- Additional CSS Files -->
		<link rel="stylesheet" href="assets/css/fontawesome.css">
		<link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">
		<link rel="stylesheet" href="assets/css/animated.css">
		<link rel="stylesheet" href="assets/css/owl.css">
		
		<style>
			.formTxt1{
			position:relative;
			right:350px;
			}
			.formTxt3{
			position:relative;
			right:210px;
			text-align:center;
			font-size:100%;
			font-weight: bold;
			}
			.formTxt2{
			position:relative;
			top:70%;
			left:35%;
			right:65%;
			bottom:30%;
			}
			.formTxt4{
			position:relative;
			right:330px;
			
			}
			input{
			background-color:white;
			}
			#Form1{
			position: relative;
			right: 40px;
			color: #fa65b1;
			font-size: 30px;
			
			}
		</style>
		
	</head>
	
	<body>
		
		<!-- ***** Preloader Start ***** -->
		<div id="js-preloader" class="js-preloader">
			<div class="preloader-inner">
				<span class="dot"></span>
				<div class="dots">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<!-- ***** Preloader End ***** -->
		
		
		
		<!-- ***** Header Area Start ***** -->
		<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav class="main-nav">
							<!-- ***** Logo Start ***** -->
							<a href="index.html" class="logo" id="OB">
								<img src="assets/images/logo-v1.png" alt="">
							</a>
							<style>
								#OB {
								width: 200px;
								height: 100px;
								object-fit: none;
								object-position: center top;
								} 
							</style> 
							<!-- ***** Logo End ***** -->
							
							<!-- ***** Menu Start ***** -->
							<ul class="nav">
								<li class="scroll-to-section"><a href="index.html" class="active">Home</a></li>
								<li class="scroll-to-section"><a href="index.html">About</a></li>
								<li class="scroll-to-section"><a href="Games list.html">Games</a></li>
								<li class="scroll-to-section"><a href="index.html">Contact</a></li> 
								<li class="scroll-to-section"><div class="border-first-button"></div></li> 
							</ul>
							
							<a class='menu-trigger'>
								<span>Menu</span>
							</a>
							<!-- ***** Menu End ***** -->
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- ***** Header Area End ***** -->
		
		
		<div style="height: 100vh;">
			<br><br><br>
			
			<div id="contact" class="contact-us section">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
								<h6>Manager Log in</h6>
								<h4>Welcame to <em>Gamino</em></h4>
								<div class="line-dec"></div>
							</div>
						</div>
						
						<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
							<form id="contact" action="" method="post" onsubmit="moveToUserPage();return false;">
								<div id="box" class="row">
									<div class="fill-form">
										<div class="col-lg-6">
											<fieldset>
												<div class="formTxt3"><label id="Form1" for="name" style="background-color: white;">Please fill in the information</label></div>
												<br>
												<div class="formTxt1"></div>
												<input style="background-color: white;" id="name" type="name" name="name" id="name" placeholder="Enter your username" autocomplete="on" pattern="[A-Za-z]{3,}$" title="At least 3 letters only" required>
											</fieldset>
										</div>
										<div class="col-lg-6">
											<fieldset>
												<br><br>
												<div class="formTxt4"></div>
												<input style="background-color: white;" id="password" type="password" name="password" id="password" placeholder="Enter your password" autocomplete="on" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
												title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>  
											</fieldset>
										</div>
										<div class="col-lg-12">
											<fieldset>
												<button type="submit"  id="form-submit" class="main-button ">LogIn</button>
											</fieldset>
										</div>
										
						
									</div>
									<h6>Don't hava an account? <a id="sign" href="log in.html">sign up</a> now!</h6>
								</div>
							</div>
						</form>
						
						
					</div>
				</div>
			</div>
			
			<footer>
				<ul class="social_icon">
					<li><a href="https://www.instagram.com/" target="_blank"><img src="assets2/images/instagram.png" alt="instagram"></a></li>
					<li><a href="https://www.whatsapp.com/" target="_blank"><img src="assets2/images/whatsapp.png" alt="whatsapp"></a></li>
					<li><a href="https://twitter.com/home" target="_blank"><img class="twi" src="assets2/images/twitter.png" alt="twitter"></a></li>
				</ul>
				
				<p style="padding-right: 50px;">©2022 Gamino | Some Rights Reserved</p>
				
				<style>
					
					
					footer .social_icon, 
					footer .menu {
					position: relative;
					display: flex;
					justify-content: center;
					align-items: center;
					margin: 10px 0;
					flex-wrap: wrap;
					}
					
					footer .social_icon li,
					footer .menu li {
					list-style: none;
					}
					
					footer .social_icon li a {
					font-size: 2em;
					color: white;
					margin: 0 10px;
					display: inline-block;
					transition: 0.5s;
					}
					
					.social .twi,
					.social_icon .twi {
					width: 50px;
					height: 50px;
					}
					
					.social_icon img,
					.social img {
					width: 40px;
					height: 40px;
					}
					
					footer .social_icon li a:hover {
					transform: translateY(-10px);
					}
					
					footer .menu li a {
					font-size: 1.3em;
					color: white;
					margin: 0 10px;
					display: inline-block;
					text-decoration: none;
					opacity: 1;
					}
					
					footer .menu li a:hover {
					opacity: 0.80;
					}
					
					footer p {
					text-align: center;
					color: white;
					margin-top: 15px;
					margin-bottom: 10px;
					font-size: 0.9em;
					margin-left: 40px;
					}
					
					
					/* --------------------------*/ 
					footer {
					background-image: url(assets2/images/footer-bg.jpg);
					background-position: center center;
					background-repeat: no-repeat;
					background-size: cover;
					margin-top: 130px;
					position: relative;
					width: 100%;
					min-height: 100px;
					padding: 20px 50px;
					display: flex;
					justify-content: center;
					align-items: center;
					flex-direction: column;
					}
					
					footer p {
					text-align: center;
					margin: 20px 0px;
					color: #fff;
					text-align: center;
					color: white;
					margin-top: 15px;
					margin-bottom: 10px;
					font-size: 0.9em;
					margin-left: 40px;
					}
					
					footer p a {
					color: #fff;
					transition: all .5s;
					}
					
				</style>
			</footer>
			
			
			
			<!-- Scripts -->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/owl-carousel.js"></script>
			<script src="assets/js/animation.js"></script>
			<script src="assets/js/imagesloaded.js"></script>
			<script src="assets/js/custom.js"></script>
			<script>
				function moveToUserPage()
				{
					location.href="Admin.html";
				}
			</script>
		</body>
	</html>												
	<!--- 
		.formInformation{
		padding-top: 50px;
		padding-right: 30px;
		padding-bottom: 50px;
		padding-left: 80px;
		text-align:center:
		
		}
		
	--->
	
