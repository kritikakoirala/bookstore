<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Escape Books Store</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> 
<link rel="preload" href="http://localhost/bookstore/fonts/Lato-Regular.ttf" as="font" crossorigin>
<link rel="preload" href="http://localhost/bookstore/fonts/Merriweather-Regular.ttf" as="font" crossorigin>

</head>
<body>
		<header id="header">
			<div class="container-fluid">	
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">

					<!-- main header of the page -->
						<div class="main-header">
						<!-- top header includes site logo and login and search -->
							<div class="header-top">
								<div class="escape-logo">
									<a href="index.php"><img src="images/bookstore_logo.png" class = "img-responsive" alt="Escape Bookstore Logo"></a>
								</div><!--.logo-->
							
								<div class="header-top-middle">							
									<div class="form-search">			
										<!-- search box -->
										<form action="" class="book-search">
											<i class="fas fa-search"></i>
											<input type="text" placeholder = "Search books by..." name = "search-books">
											<select name="product_cat" id="product_dropdown">All Products
												<option value="art">Art</option>
												<option value="fantasy">Fantasy</option>
												<option value="Mystery">Mystery</option>
											</select>
										</form>
									</div>	<!--.form-search-->
								
									<div class="login">
										<ul class="nav">
											<li class="nav-item">
												<a href="login.php" class="nav-link fas fa-user" data-toggle="modal" data-target="#loginModal"> Login</a>			
											</li><!--.nav-item-->

											<!-- Modal for login -->

											<div class="modal fade" id="loginModal">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title">Login</h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div><!--modal-header-->
														
														<div class="modal-body">              
															<form action="">
																<div class="form-group">
																	<label for="user"></label>
																	<input type="text" class="form-control" placeholder="Username or Email" id="user">
																</div>

																<div class="form-group">
																	<label for="pwd"></label>
																	<input type="password" class="form-control" placeholder="Password" id="pwd">
																</div>

																<div class="form-group form-check">
																	<label class="form-check-label">
																	<input class="form-check-input" type="checkbox"> Remember me
																	</label>
																</div>

																<button type="submit" class="btn btn-primary btn-block">Submit</button>
															</form><!--form-->
														</div><!--modal-body-->
														
														<div class="modal-footer">
															<p>New Here. <a href = "">Register</a></p>
														</div><!--modal-footer-->
													</div><!--modal-content-->
												</div><!--modal-dialog-->
											</div><!--modal-->

											<li class="nav-item">
												<a href="#" class="nav-link fas fa-user-plus" data-toggle="modal" data-target="#registerModal"> Register</a>
											</li><!--.nav-item-->

											<!-- Modal for registeration-->

											<div class="modal fade" id="registerModal">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title">Register</h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div><!--modal-header-->
														
														<div class="modal-body">              
															<form action="">
																<div class="form-group">
																	<label for="user"></label>
																	<input type="text" class="form-control" placeholder="Username" id="user">
																</div>

																<div class="form-group">
																	<label for="email"></label>
																	<input type="email" class="form-control" placeholder="Enter email" id="email">
																</div>

																<div class="form-group">
																	<label for="pwd"></label>
																	<input type="password" class="form-control" placeholder="Password" id="pwd">
																</div>

																<div class="form-group">
																	<label for="confirm-pwd"></label>
																	<input type="password" class="form-control" placeholder="Confirm Password" id="confirm-pwd">
																</div>

																<button type="submit" class="btn btn-primary btn-block">Register</button>
															</form><!--form-->
														</div><!--modal-body-->
														
														<div class="modal-footer">
															<p>Already a member. <a href = "">Login</a></p>
														</div><!--modal-footer-->
													</div><!--modal-content-->
												</div><!--modal-dialog-->
											</div><!--modal-->

										</ul><!--.nav-->
									</div><!--login-->									
										
								</div><!--header-middle-->
							
							</div><!--header-top-->

							<div class="header-bottom">
								<nav class="navbar navbar-expand-md bg-faded navbar-light">
									<button class="navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#collapsibleNavbar">
										<span class="navbar-toggler-icon"></span>
									</button>

									<div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
										<ul class="navbar-nav">
											<li class="nav-item"><a href="" class="nav-link">Home</a></li>
											<li class="nav-item"><a href="" class="nav-link">Authors</a></li>
											<li class="nav-item"><a href="" class="nav-link">Categories</a></li>
											<li class="nav-item"><a href="" class="nav-link" data-hidden = "true">Favorites</a></li>
											<div class="hidden-login">
											<li class="nav-item"><a href="" class="nav-link" data-hidden = "true">Login</a></li>
											</div><!--hidden-login-->
										</ul><!--navbar--nav-->
									</div><!--collapse-->
								</nav><!--navbar-->
							</div><!--header-bottom-->

						</div><!--main-header-->
					</div><!--col-->
				</div><!--row-->
			</div><!--.container-->
		</header><!--#header-->
	
		<div class="jombotron home-page">
			<div class="container-fluid">
				<h1>Books... <span>Your Perfect Escape</span></h1>
			</div><!--container-fluid-->
		</div><!--.jombotron-->

		<!-- Section for best sellers -->
		<section id="bestsellers">					
			<div class="container">			
				<h2>BestSellers</h2>	
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">							
							<div  class="card-deck owl-carousel owl-theme">	
																					
								<div class="card">		
									<div class="card-img-top">
										<img src="images/woman.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->					
									
									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->							
								</div><!--card-->									
							
								<div class="card">
									<div class="card-img-top">
										<img src="images/sea.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	

									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->
								</div><!--card-->	
							
								<div class="card">
									<div class="card-img-top">
										<img src="images/portrait.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	

									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->									
																
								<div class="card">
									<div class="card-img-top">
										<img src="images/flower.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	

									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->
								
								<div class="card">
									<div class="card-img-top">
										<img src="images/underwater.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	

									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->
								
							</div><!--card-deck-->
						
						
					</div><!--col-->
				</div><!--row-->
			</div><!--container-->			
		</section><!--#bestsellers-->

		<!-- Section for latest books -->
		<section id="latest-books">					
			<div class="container">			
				<h2>Latest Books</h2>	
				<div class="row">
					<div class="col-lg-12">												
							<div class="card-deck owl-carousel owl-theme">	
								<div class="card">							
									<div class="card-img-top">
										<img src="images/underwater.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	

									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->										
								
								<div class="card">
									<div class="card-img-top">
										<img src="images/sea.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	

									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->
																	
								<div class="card">
									<div class="card-img-top">
										<img src="images/portrait.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	

									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->
																	
								<div class="card">
									<div class="card-img-top">
										<img src="images/fantasy.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	

									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->
							
								<div class="card">
									<div class="card-img-top">
										<img src="images/woman.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	
									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->								
							</div><!--card-deck-->
						
					</div><!--col-->
				</div><!--row-->	
			</div><!--container-->			
		</section><!--#latest-books-->

		<!-- Section for popular books books -->
		<section id="popular-books">					
			<div class="container">			
				<h2>Popular Books</h2>							
				<div class="row">
					<div class="col-lg-12">												
							<div class="card-deck owl-carousel owl-theme">	
								<div class="card">					
									<div class="card-img-top">
										<img src="images/flower.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	
									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->		

								<div class="card">
									<div class="card-img-top">
										<img src="images/sea.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	

									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->
																	
								<div class="card">
									<div class="card-img-top">
										<img src="images/portrait.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	

									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->
																	
								<div class="card">
									<div class="card-img-top">
										<img src="images/fantasy.jpg" alt="Slider 1">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	

									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->
							
								<div class="card">
									<div class="card-img-top">
										<img src="images/underwater.jpg" alt="Slider 1" class = "img-responsive">
										<div class="hover-contents">
											<div class="hover-btns">
												<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
												<a href="" class = "fav-btn"> + </a>
											</div>	<!--hover-btns-->
										</div><!--hover-contents-->
									</div><!--card-img-top-->	

									<div class="card-body book-info">
										<span class="card-title"><a href = "#">Barefoot to Avalon</a></span><!--.card-title-->
										<span class="card-text">by:<a href = "#"> David O'Heir</a></span>
										<span class="card-price">$40.00</span>
									</div><!--card-body-->	
								</div><!--card-->
							
							</div><!--card-deck-->
					
					</div><!--col-->
				</div><!--row-->	
			</div><!--container-->			
		</section><!--#popular-books-->

		<!-- Section for newsletter -->
		<section id="newsletter">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 news">
						<h2>Subscribe Now</h2>
						<p>For coupons, newsletter and more</p>
					</div><!--col-->
				</div><!--row-->
			</div><!--container-->
		</section><!--#newsletter-->

		<footer id = "footer">
			<div class="footer-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 col-md-3 address">
							<h5>Escape Bookstore</h5>
							<p>escape@gmail.com</p>
							<p>033-455282</p>
							<p>Kathmandu, Nepal</p>
						</div><!--col-->

						<div class="col-lg-4 col-md-3 social-media ">
							<h5>Find us on</h5>
							<ul class="nav justify-content-center">
								<li class="nav-items">
									<a href="#" class="nav-link fab fa-facebook"></a>
								</li><!--nav-items-->
								<li class="nav-items">
									<a href="#" class="nav-link fab fa-twitter"></a>
								</li><!--nav-items-->
								<li class="nav-items">
									<a href="#" class="nav-link fab fa-instagram"></a>
								</li><!--nav-items-->
								<li class="nav-items">
									<a href="#" class="nav-link fab fa-pinterest"></a>
								</li><!--nav-items-->
								<li class="nav-items">
									<a href="#" class="nav-link fab fa-google"></a>
								</li><!--nav-items-->
							</ul><!--nav-->
						</div><!--col--> 

						<div class="col-lg-4 col-md-3">
							<h5>Categories</h5>
							<ul class="nav categories flex-column">
								<li class="nav-item">
									<a href="" class="nav-link categories-menu-bestsellers">Bestsellers</a>
								</li><!--nav-items-->
								<li class="nav-item">
									<a href="" class="nav-link categories-menu-latest-books">Latest Books</a>
								</li><!--nav-items-->
								<li class="nav-item">
									<a href="" class="nav-link categories-menu-popular-books">Popular Books</a>
								</li><!--nav-items-->
								<li class="nav-item">
									<a href="" class="nav-link  categories-menu-authors">Authors</a>
								</li><!--nav-items-->
							</ul><!--nav-->
						</div><!--col-->
					</div><!--row-->
				</div><!--container-->
			</div><!--footer-top-->

			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="copyright col-lg-12">
							<span>Copyright &copy; 2019. All Rights Reserved. Escape Bookstore</span>
						</div><!--col-->
					</div><!--row-->
				</div><!--container-->
			</div><!--footer-bottom-->
		</footer><!--footer-->
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "js/main.js"></script>
<script src = "js/owl.carousel.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>