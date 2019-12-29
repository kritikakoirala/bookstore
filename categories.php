<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Category Page of Escape Bookstore</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 
</head>
<body>
	<header id="header">
		<div class="container-fluid">	
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">

					<div class="main-header">

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
											<a href="#" class="nav-link fas fa-user"> Login</a>			
										</li><!--.nav-item-->

										<li class="nav-item">
											<a href="#" class="nav-link fas fa-user-plus"> Register</a>
										</li><!--.nav-item-->
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

	<section id="category">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="sort-products">			
						<!-- search box -->
						<form action="" method = "post">
							<label for="sort_dropdown">Sort By:</label>
							<select name="sort_details" id="sort_dropdown">All Products
								<option value="art">Alphabetical</option>
								<option value="fantasy">Date</option>
								<option value="Mystery">Price</option>
								<option value="Mystery">Authors</option>
							</select>
						</form>
					</div>	<!--.form-search-->
				</div><!--col-->
			</div><!--row-->

			<div class="row">
			
				<div class="col-lg-3 ">
					<div class="category-list">
						<h4 class = "cat_header">All Categories</h4>
						<ul class="nav categories flex-column">
							<li class="nav-items">
								<a href="" class="nav-link ">Art (10)</a>
							</li><!--nav-items-->
							<li class="nav-items ">
								<a href="" class="nav-link ">History (20)</a>
							</li><!--nav-items-->
							<li class="nav-items ">
								<a href="" class="nav-link ">Fantasy (30)</a>
							</li><!--nav-items-->
							<li class="nav-items ">
								<a href="" class="nav-link ">Mystery (40)</a>
							</li><!--nav-items-->
							<li class="nav-items ">
								<a href="" class="nav-link ">History (20)</a>
							</li><!--nav-items-->
							<li class="nav-items ">
								<a href="" class="nav-link ">Fantasy (30)</a>
							</li><!--nav-items-->
							<li class="nav-items ">
								<a href="" class="nav-link ">Mystery (40)</a>
							</li><!--nav-items-->
						</ul><!--nav-->
					</div>	<!--category_list-->
					
					<div class="price-list">
						<h4 class = "price_header">Filter By Price</h4>

						<div class="range-slider">
							<div id="slider-range"></div>
							<div class="slider-price">
								<p>
									<input type="text" id = "amount">
								</p>
							</div>
						</div><!--range-slider-->
					</div><!--price-list-->

					<div class="author-list">
						<h2 class="author_header">Authors</h2>
						<ul class="nav authors flex-column">
							<li class="nav-items">
								<a href="" class="nav-link">Alan Brennet</a>
							</li><!--nav-items-->
							<li class="nav-items ">
								<a href="" class="nav-link">Alan Brennet</a>
							</li><!--nav-items-->
							<li class="nav-items ">
								<a href="" class="nav-link">Alan Brennet</a>
							</li><!--nav-items-->
							<li class="nav-items ">
								<a href="" class="nav-link">Alan Brennet</a>
							</li><!--nav-items-->
							<li class="nav-items ">
								<a href="" class="nav-link">Alan Brennet</a>
							</li><!--nav-items-->
							<li class="nav-items ">
								<a href="" class="nav-link ">Alan Brennet</a>
							</li><!--nav-items-->
							<li class="nav-items ">
								<a href="" class="nav-link ">Alan Brennet</a>
							</li><!--nav-items-->
						</ul><!--nav-->
					</div><!--author-list-->
				</div><!--col-->

				<div class="col-lg-9">
					<div class="book-items">
						<div class="row items">
							<div class="col-lg-4">
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
							</div><!--col-->

							<div class="col-lg-4">
								<div class="card">					
									<div class="card-img-top">
										<img src="images/moon.jpg" alt="Slider 1">
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
							</div><!--col-->

							<div class="col-lg-4">
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
							</div><!--col-->

							

						</div><!--row-->

						<div class="row items">
							<div class="col-lg-4">
								<div class="card">					
									<div class="card-img-top">
										<img src="images/thankful.jpg" alt="Slider 1">
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
							</div><!--col-->

							<div class="col-lg-4">
								<div class="card">					
									<div class="card-img-top">
										<img src="images/witch_house.jpg" alt="Slider 1">
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
							</div><!--col-->

							<div class="col-lg-4">
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
							</div><!--col-->

						

						</div><!--row-->

						<div class="row items">
							<div class="col-lg-4">
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
							</div><!--col-->

							<div class="col-lg-4">
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
							</div><!--col-->

							<div class="col-lg-4">
								<div class="card">					
									<div class="card-img-top">
										<img src="images/thankful.jpg" alt="Slider 1">
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
							</div><!--col-->

							

						</div><!--row-->
					</div><!--book-items-->

					<ul class="pagination justify-content-center">
						<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>
				</div><!--col-->

			</div><!--row-->

		</div><!--container-->
	</section><!--category-->

	<footer id = "footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 address">
						<h5>Escape Bookstore</h5>
						<p>escape@gmail.com</p>
						<p>033-455282</p>
						<p>Kathmandu, Nepal</p>
					</div><!--col-->
					<div class="col-lg-4 social-media ">
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

					<div class="col-lg-4">
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src = "js/owl.carousel.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>