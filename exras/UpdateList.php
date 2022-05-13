<?php  

include "include/Connect.php";

$SQL="SELECT GameID , Name , Description , Picture FROM game ;";
$Result= mysqli_query( $Connect, $SQL);

?>                       
                                    
                                        



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
		
		<title>game list</title>
		
		<!-- Bootstrap core CSS -->
		<link href="vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		
		<!-- Additional CSS Files -->
		<link rel="stylesheet" href="assets2/css/fontawesome.css">
		<link rel="stylesheet" href="assets2/css/templatemo-digimedia-v1.css">
		<link rel="stylesheet" href="assets2/css/animated.css">
		<link rel="stylesheet" href="assets2/css/owl.css">
		
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
								<li class="scroll-to-section"><a href="index.html#top" class="active">Home</a></li>
								<li class="scroll-to-section"><a href="index.html#about">About</a></li>
								<li class="scroll-to-section"><a href="Games list.php">Games</a></li>
								<li class="scroll-to-section"><a href="index.html#contact">Contact</a></li> 
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
		
		<div class="intro-banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 style="color: #8267e2;">THE GAMES LIST</h1>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="demos" id="demos">
			<div class="container">
				<div class="row">
			
					
                                                    <?php 
                                                      while($row = mysqli_fetch_assoc($Result) ){
                                                   echo "<div class=\"col-lg-4\">";
                                                   echo "<div class=\"demo-item\" style=\"margin-bottom: 30px;\">";
                                                    echo "<a href='UpdateGame.php?GameID=".$row['GameID']."'><img src='".$row['Picture'] ."' alt='DigiMedia - variation' style='width: 295.984px; height: 295.984px;' ></a>";
                                                    echo "<h4 style=\"margin-top: 15px;width: 295.984px; color: #ac6fe1;\">".$row["Name"]."</h4>";
                                                      
                                                      echo "</div>";
                                                      echo "</div>";
                                                      }
                                                    ?>
							
						
									
					
					
				
					
					
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
		</footer>
		
		
		<!-- Scripts -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/owl-carousel.js"></script>
		<script src="assets/js/animation.js"></script>
		<script src="assets/js/imagesloaded.js"></script>
		<script src="assets/js/custom.js"></script>
		
	</body>
	
</html>
