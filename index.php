<?php  
include "include/Connect.php";
 $sql3="SELECT * FROM review;";
 $result3=$Connect->query($sql3);
 
 $sql4="SELECT * FROM game;";
 $result4=$Connect->query($sql4);
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
		
		<title>Gamnio</title>
		
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
								<li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
								<li class="scroll-to-section"><a href="#about">About</a></li>
								<li class="scroll-to-section"><a href="#services">Services</a></li>
								<li class="scroll-to-section"><a href="#blog">Recent Games</a></li>
								<li class="scroll-to-section"><a href="Games list.html">Games</a></li>
								<li class="scroll-to-section"><a href="#contact">Contact</a></li> 
								<li class="scroll-to-section"><div class="border-first-button"><a href="log in.html">log in</a></div></li> 
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
		
		<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-6 align-self-center">
								<div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
									<div class="row">
										<div class="col-lg-12">
											<h6>Gamnio</h6>
											<h2>We Bring You The Truth</h2>
											<p>In Gamnio we work very hard to ease the reviews searching process for our users. Here you can find all different kind of games and thier reviews , you can see reviews or write yours ,and know the latest news about games.</p>
										</div>
										<!-- <div class="col-lg-12">
											<div class="border-first-button scroll-to-section">
												<a href="sign up.html">sign up</a>
											</div>
										</div> -->
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
									<img src="assets/images/slider-dec.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="about" class="about section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-6">
								<div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
									<img src="assets2/images/about-dec.png" alt="">
								</div>
							</div>
							<div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
								<div class="about-right-content">
									<div class="section-heading">
										<h6>About Us</h6>
										<h4>Who is <em>Gamino</em></h4>
										<div class="line-dec"></div>
									</div>
									<p>We are a game lovers who wanted to help all the gamers community by making a website to help them find thhe right game in no time.</p>
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
												<div class="progress" data-percentage="90">
													<span class="progress-left">
														<span class="progress-bar"></span>
													</span>
													<span class="progress-right">
														<span class="progress-bar"></span>
													</span>
													<div class="progress-value">
														<div>
															<?php echo mysqli_num_rows( $result4 ); ?><br>
															<span>Game</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-4">
											<div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
												<div class="progress" data-percentage="80">
													<span class="progress-left">
														<span class="progress-bar"></span>
													</span>
													<span class="progress-right">
														<span class="progress-bar"></span>
													</span>
													<div class="progress-value">
														<div>
															<?php 
                                                                                                                        $revCount;
                                                                                                                        while($row3 = mysqli_fetch_assoc($result3)){
                                                                                                                          $revCount += $row3['revNum'] ; 
                                                                                                                        }
                                                                                                                        $userCount = 150/100*$revCount ;
                                                                                                                        echo ceil($userCount) ?><br>
															<span>User</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-4">
											<div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
												<div class="progress" data-percentage="80">
													<span class="progress-left">
														<span class="progress-bar"></span>
													</span>
													<span class="progress-right">
														<span class="progress-bar"></span>
													</span>
													<div class="progress-value">
														<div>
															<?php echo $revCount ?><br>
															<span>Review</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="services" class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
							<h6>Our Services</h6>
							<h4>What Our website <em>Provides</em></h4>
							<div class="line-dec"></div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="naccs">
							<div class="grid">
								<div class="row">
									<div class="col-lg-12">
										<div class="menu">
											
											<div>
												<div class="thumb">                 
													<span class="icon"><img src="assets2/images/service-icon-02.png" alt=""></span>
													Reviews
												</div>
											</div>
											<div>
												<div class="thumb">                 
													<span class="icon"><img src="assets2/images/service-icon-03.png" alt=""></span>
													Search
												</div>
											</div>
											<div>
												<div class="thumb">                 
													<span class="icon"><img src="assets2/images/service-icon-04.png" alt=""></span>
													Stories
												</div>
											</div>
											<div class="last-thumb">
												<div class="thumb">                 
													<span class="icon"><img src="assets2/images/service-icon-01.png" alt=""></span>
													Sign Up &amp; In
												</div>
											</div>
										</div>
									</div> 
									<div class="col-lg-12">
										<ul class="nacc">
											<li class="active">
												<div>
													<div class="thumb">
														<div class="row">
															<div class="col-lg-6 align-self-center">
																<div class="left-text">
																	<h4>Game Reviews</h4>
																	<p>we gather you all the reviews you need to decide wich game you gonna play next.</p>
																	
																	<div class="ticks-list">
																		<h6 style="color: #91b6fc; font-weight: 700; line-height: 35px; margin-bottom: 10px; margin-top: 10px;">For Our Users:</h6>
																		<span><i class="fa fa-check"></i> Honest Reviews</span> 
																		<span><i class="fa fa-check"></i> Leaving Reviews</span> 
																		
																		<h6 style="color: #91b6fc; font-weight: 700; line-height: 35px; margin-bottom: 10px; margin-top: 10px;">For Our Game Providers:</h6>
																		<span><i class="fa fa-check"></i> View Reviews</span>
																		<span><i class="fa fa-check"></i> View The Number Of Reviews</span>
																	</div>
																</div>
															</div>
															<div class="col-lg-6 align-self-center">
																<div class="right-image">
																	<img src="assets2/images/services-image-02.jpg" alt="">
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div>
													<div class="thumb">
														<div class="row">
															<div class="col-lg-6 align-self-center">
																<div class="left-text">
																	<h4>Easy And Fast Search</h4>
																	<p>We help you searching for games you wanna play easily and fastly due to our huge games servers.</p>
																	
																	<div class="ticks-list">
																		<h6 style="color: #91b6fc; font-weight: 700; line-height: 35px; margin-bottom: 10px; margin-top: 10px;">For Our Users:</h6>
																		<span><i class="fa fa-check"></i> Fsat Search</span> 
																		<span><i class="fa fa-check"></i> Enormous Amount Of Games</span> 
																		
																		<h6 style="color: #91b6fc; font-weight: 700; line-height: 35px; margin-bottom: 10px; margin-top: 10px;">For Our Game Providers:</h6>
																		<span><i class="fa fa-check"></i> Users Can Find Your Game Faster</span>
																		<span><i class="fa fa-check"></i> Huge Servers</span> 
																	</div>
																</div>
															</div>
															<div class="col-lg-6 align-self-center">
																<div class="right-image">
																	<img src="assets2/images/services-image-03.jpg" alt="">
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div>
													<div class="thumb">
														<div class="row">
															<div class="col-lg-6 align-self-center">
																<div class="left-text">
																	<h4>Game Stories</h4>
																	<p>With each game there will ba a game story to help you understand the game and decide whethers you gonna play it or not.</p>
																	
																	<div class="ticks-list">
																		<h6 style="color: #91b6fc; font-weight: 700; line-height: 35px; margin-bottom: 10px; margin-top: 10px;">For Our Users:</h6>
																		<span><i class="fa fa-check"></i> Ability To Watch Game Stories</span> 
																		
																		<h6 style="color: #91b6fc; font-weight: 700; line-height: 35px; margin-bottom: 10px; margin-top: 10px;">For Our Game Providers:</h6>
																		<span><i class="fa fa-check"></i> Game Story Viewability</span>
																		<span><i class="fa fa-check"></i> The Ability To Add Game Stories</span> 
																	</div>
																</div>
															</div>
															<div class="col-lg-6 align-self-center">
																<div class="right-image">
																	<img src="assets2/images/services-image-04.jpg" alt="">
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div>
													<div class="thumb">
														<div class="row">
															<div class="col-lg-6 align-self-center">
																<div class="left-text">
																	<h4>Sign Up &amp; Sign In</h4>
																	<p>As a <span style="color: #726ae3;">game provider</span> you can have an account to keep up with your games and thier reviews, along with the ability to sign in and out from you account.</p>
																	
																	<div class="ticks-list">
																		<h6 style="color: #91b6fc; font-weight: 700; line-height: 35px; margin-bottom: 10px; margin-top: 10px;">For Our Game Providers:</h6>
																		<span><i class="fa fa-check"></i> Sign Up</span>
																		<span><i class="fa fa-check"></i> Sign In</span>
																		<span><i class="fa fa-check"></i> Sign Out</span> 
																		<br>
																	</div>
																</div>
															</div>
															<div class="col-lg-6 align-self-center">
																<div class="right-image">
																	<img src="assets2/images/services-image.jpg" alt="">
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>          
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div id="Search" id="free-quote" class="free-quote">
			<div  class="container">
				<div class="row">
					<div  class="col-lg-4 offset-lg-4">
						<div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
							<h6>Search for Game reviews</h6>
							<h4>See others' reviews!</h4>
							<div class="line-dec"></div>
						</div>
					</div>
					<div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
						<form id="search" action="#" method="GET">
							<div class="row">
								<div class="col-lg-4 col-sm-4">
									<fieldset>
										<input type="web" name="web" class="website" placeholder="type game name.. " autocomplete="on" required>
									</fieldset>
								</div>
								
								
								<div class="col-lg-4 col-sm-4">
									<fieldset>
										<button type="submit" class="main-button">Search! </button>
									</fieldset>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<div id="portfolio" class="our-portfolio section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
							<h6>Best Games</h6>
							<h4>See Top 5 <em>Games</em></h4>
							<div class="line-dec"></div>
						</div>
					</div>
				</div>
			</div>
                    
                    
                                                                                                              !--!top5!--!
			<div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
				<div class="row">
					<div class="col-lg-12">
						<div class="loop owl-carousel">
                                                    <?php
                                                        $sql1="SELECT * FROM review ORDER BY revNum DESC LIMIT 5;";
                                                        $result1=$Connect->query($sql1);
                                                        if ($result1->num_rows > 0){
                                                            $count = 0;
                                                          while ($row1 = mysqli_fetch_assoc($result1)){
                                                              $sql2="SELECT Name, GameID, Picture FROM game where GameID = $row1[GameID];";
                                                              $result2=$Connect->query($sql2);
                                                              $row2 = mysqli_fetch_assoc($result2)
                                                       ?>
							<div class="item">
								<div class="portfolio-item">
									<div class="thumb" style="height: 0; padding-bottom: 100%;">
                                                                            <a href="game post.php<?php echo'?id='.$row2['GameID'] ?>"><img src="<?php echo $row2['Picture'] ?>" alt="" style="object-position: center;height: 100%;width: 100%;top: 0; bottom: 0; left: 0; right: 0;position: absolute;"></a>
									</div>
									<div class="down-content">
										<h4><?php echo $row2['Name'] ?></h4>
										<span>
                                                                                    <?php 
                                                                                    ++$count;
                                                                                        if($count == 3){
                                                                                            echo $count.'&rfr;&dfr;';
                                                                                        }
                                                                                        else if($count == 2){
                                                                                            echo $count.'&nfr;&dfr;';
                                                                                        }
                                                                                        else if($count == 1){
                                                                                            echo $count.'&sfr;&tfr;';
                                                                                        }
                                                                                        else{
                                                                                           echo $count.'&tfr;&hfr;';  
                                                                                        }
                                                                                    ?>
                                                                                </span>
                                                                                
									</div>
								</div>
							</div>
                                                    <?php 
                                                          }
                                                        }
                                                          ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="blog" class="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="section-heading">
							<h6>Recent News</h6>
							<h4>Our New Games' <em>Posts</em></h4>
							<div class="line-dec"></div>
						</div>
					</div>
                                        <?php
                                            $sql="SELECT * FROM game ORDER BY GameID DESC LIMIT 4;";
                                            $result=$Connect->query($sql);
                                            if ($result->num_rows > 0){
                                                $first = true;
                                              while ($row = mysqli_fetch_assoc($result)){
                                                 if($first){
                                       ?>
					<div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="blog-post">
							<div class="thumb">
								<a href="game post.php<?php echo'?id='.$row['GameID'] ?>"><img src="<?php echo $row['Picture'] ?>" alt="" onclick="gamePage(this.src , 'Fortnite')"></a>
							</div>
							<div class="down-content">
								<span class="category"><?php echo $row['Type'] ?></span>
								<span class="date"><?php echo $row['AddTime'] ?></span>
								<a ><h4><?php echo $row['Name'] ?></h4></a>
								<p style="max-height: 120px;text-overflow: ellipsis; word-wrap: break-word; overflow: hidden;"><?php echo $row['Description']?></p>
								<span class="author"><img src="assets2/images/author-post.jpg" alt="">By: Andrea Mentuzi</span>
								<div class="border-first-button"><a href="game post.php<?php echo'?id='.$row['GameID'] ?>">See Post</a></div>
							</div>
						</div>
					</div>
                                        
					<div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="blog-posts">
							<div class="row">
                                                            <?php
                                                                $first = false;
                                                                 }
                                                                 else{
                                                              ?>
								<div class="col-lg-12">
									<div class="post-item">
										<div class="thumb">
											<a href="game post.php<?php echo'?id='.$row['GameID']?>"><img src="<?php echo $row['Picture']?>" alt="" style="height: 230px; width: 230px;" ></a>
										</div>
										<div class="right-content">
											<span class="category"><?php echo $row['Type']?></span>
											<span class="date"><?php echo $row['AddTime'] ?></span>
											<a><h4><?php echo $row['Name'] ?></h4></a>
											<p style="max-height: 60px;text-overflow: ellipsis; word-wrap: break-word; overflow: hidden;"><?php echo $row['Description']?></p>
										</div>
									</div>
								</div>
                                                        <?php
                                                                 }
                                                              }
                                                            }
                                                        ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>  
		
		<div id="contact" class="contact-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
							<h6>Contact Us</h6>
							<h4>Get In Touch With Us <em>Now</em></h4>
							<div class="line-dec"></div>
						</div>
					</div>
					<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
						<form id="contact" action="" method="post">
							<div class="row">
								<div class="col-lg-12">
									<div class="contact-dec">
										<img src="assets2/images/contact-dec.png" alt="">
									</div>
								</div>
								<div class="col-lg-5">
									<div id="map">
										<iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="fill-form">
										<div class="row">
											<div class="col-lg-4">
												<div class="info-post">
													<div class="icon">
														<img src="assets2/images/phone-icon.png" alt="">
														<a>0110200340</a>
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="info-post">
													<div class="icon">
														<img src="assets2/images/email-icon.png" alt="">
														<a>our@email.com</a>
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="info-post">
													<div class="icon">
														<img src="assets2/images/location-icon.png" alt="">
														<a>256 Riyadh</a>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<fieldset>
													<input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
												</fieldset>
												<fieldset>
													<input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
												</fieldset>
												<fieldset>
													<input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
												</fieldset>
											</div>
											<div class="col-lg-6">
												<fieldset>
													<textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
												</fieldset>
											</div>
											<div class="col-lg-12">
												<fieldset>
													<button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
												</fieldset>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
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
		<script src="vendor2/jquery/jquery.min.js"></script>
		<script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets2/js/owl-carousel.js"></script>
		<script src="assets2/js/animation.js"></script>
		<script src="assets2/js/imagesloaded.js"></script>
		<script src="assets2/js/custom.js"></script>
		<script>
			function gamePage(src , h4){
				localStorage.setItem("src", src);
				localStorage.setItem("h4", h4);
			}
		</script>
		
	</body>
</html>																																																																																																																																																																																																	