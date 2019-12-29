<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Search Page for Escape Bookstore</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
	<header id="header">
		<div class="container">	
			<div class="hamberger-button">
				<i class="fas fa-bars"></i>
			</div><!--hamberger-button-->
			<div class="header-top">
					<div class="row">
						<div class="col-lg-12">
							<div class="escape-logo">
								<a href="index.php"><img src="images/bookstore_logo.png" alt="Escape Bookstore Logo"></a>
							</div><!--.logo-->
						</div><!--col-->
					</div><!--row-->
						
					<div class="row">					
						<div class="col-lg-6">
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
						</div><!--col-->

						<div class="col-lg-6">
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
						</div><!--col-->						
					</div><!--row-->

				</div><!--.header-top-->


			<div class="clearfix"></div>

			<div class="header-bottom">
				<div id="main-nav">
					<ul class="nav justify-content-center">
						<li class="nav-item"><a href="" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="" class="nav-link">Authors</a></li>
						<li class="nav-item"><a href="" class="nav-link">Categories</a></li>
						<li class="nav-item"><a href="" class="nav-link" data-hidden = "true">Favorites</a></li>
					</ul><!--.nav-->
				</div><!--#main-nav-->
			</div><!--header-bottom-->
		</div><!--.container-->
	</header><!--#header-->

	<section id="search-banner">
		<div class="jumbotron">
			<h3>Seach Results</h3>
			<p>20 results found</p>
		</div><!--jumbotron-->
	</section><!--search-banner-->

	<section id="search-results">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="sort-products">			
						<!-- search box -->
						<form action="">
							<label for="sort_dropdown">Sort By:</label>
							<select name="sort_details" id="sort_dropdown">All Products
								<option value="art">Art</option>
								<option value="fantasy">Fantasy</option>
								<option value="Mystery">Mystery</option>
							</select>
						</form>
					</div>	<!--.form-search-->
				</div><!--col-->
			</div><!--row-->

			<div class="row">

			<div class="col-lg-3 category_list">
				<h4 class = cat_header>All Categories</h4>
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
			</div><!--col-->

			<div class="col-lg-9">
				<div class="book-items">
					<div class="row items">
						<div class="col-lg-4">
							<div class="card">
								<div class="card-img-top">
									<img src="images/portrait.jpg" alt="Portrait">
								</div><!--card-img-top-->

								<div class="card-body">
									<p class="card-title">Long Way</p>
									<p class="card-text">by: Alan Brennet</p>
									<p class="card-price">$2.40</p>
								</div><!--card-body-->
							</div><!--card-->
						</div><!--col-->

						<div class="col-lg-4">
							<div class="card">
								<div class="card-img-top">
									<img src="images/moon.jpg" alt="Portrait">
								</div><!--card-img-top-->

								<div class="card-body">
									<p class="card-title">Long Way</p>
									<p class="card-text">by: Alan Brennet</p>
									<p class="card-price">$2.40</p>
								</div><!--card-body-->
							</div><!--card-->
						</div><!--col-->

						<div class="col-lg-4">
							<div class="card">
								<div class="card-img-top">
									<img src="images/sea.jpg" alt="Portrait">
								</div><!--card-img-top-->

								<div class="card-body">
									<p class="card-title">Long Way</p>
									<p class="card-text">by: Alan Brennet</p>
									<p class="card-price">$2.40</p>
								</div><!--card-body-->
							</div><!--card-->
						</div><!--col-->

						

					</div><!--row-->

					<div class="row items">
						<div class="col-lg-4">
							<div class="card">
								<div class="card-img-top">
									<img src="images/thankful.jpg" alt="Portrait">
								</div><!--card-img-top-->

								<div class="card-body">
									<p class="card-title">Long Way</p>
									<p class="card-text">by: Alan Brennet</p>
									<p class="card-price">$2.40</p>
								</div><!--card-body-->
							</div><!--card-->
						</div><!--col-->

						<div class="col-lg-4">
							<div class="card">
								<div class="card-img-top">
									<img src="images/witch_house.jpg" alt="Portrait">
								</div><!--card-img-top-->

								<div class="card-body">
									<p class="card-title">Long Way</p>
									<p class="card-text">by: Alan Brennet</p>
									<p class="card-price">$2.40</p>
								</div><!--card-body-->
							</div><!--card-->
						</div><!--col-->

						<div class="col-lg-4">
							<div class="card">
								<div class="card-img-top">
									<img src="images/underwater.jpg" alt="Portrait">
								</div><!--card-img-top-->

								<div class="card-body">
									<p class="card-title">Long Way</p>
									<p class="card-text">by: Alan Brennet</p>
									<p class="card-price">$2.40</p>
								</div><!--card-body-->
							</div><!--card-->
						</div><!--col-->

					

					</div><!--row-->

					<div class="row items">
						<div class="col-lg-4">
							<div class="card">
								<div class="card-img-top">
									<img src="images/portrait.jpg" alt="Portrait">
								</div><!--card-img-top-->

								<div class="card-body">
									<p class="card-title">Long Way</p>
									<p class="card-text">by: Alan Brennet</p>
									<p class="card-price">$2.40</p>
								</div><!--card-body-->
							</div><!--card-->
						</div><!--col-->

						<div class="col-lg-4">
							<div class="card">
								<div class="card-img-top">
									<img src="images/sea.jpg" alt="Portrait">
								</div><!--card-img-top-->

								<div class="card-body">
									<p class="card-title">Long Way</p>
									<p class="card-text">by: Alan Brennet</p>
									<p class="card-price">$2.40</p>
								</div><!--card-body-->
							</div><!--card-->
						</div><!--col-->

						<div class="col-lg-4">
							<div class="card">
								<div class="card-img-top">
									<img src="images/thankful.jpg" alt="Portrait">
								</div><!--card-img-top-->

								<div class="card-body">
									<p class="card-title">Long Way</p>
									<p class="card-text">by: Alan Brennet</p>
									<p class="card-price">$2.40</p>
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
	</section><!--search-results-->

	<footer id = "footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 address">
						<h3>Escape Bookstore</h3>
						<p>escape@gmail.com</p>
						<p>033-455282</p>
						<p>Kathmandu, Nepal</p>
					</div><!--col-->
					<div class="col-lg-4">
						<h3>Find us on</h3>
						<ul class="nav social-media justify-content-center">
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
						<h3>Categories</h3>
						<ul class="nav categories flex-column">
							<li class="nav-items">
								<a href="" class="nav-link categories-menu-art">Art</a>
							</li><!--nav-items-->
							<li class="nav-items">
								<a href="" class="nav-link categories-menu-history">History</a>
							</li><!--nav-items-->
							<li class="nav-items">
								<a href="" class="nav-link categories-menu-fantasy">Fantasy</a>
							</li><!--nav-items-->
							<li class="nav-items">
								<a href="" class="nav-link categories-menu-mystery">Mystery</a>
							</li><!--nav-items-->
						</ul><!--nav-->
					</div><!--col-->
				</div><!--row-->
			</div><!--container-->
		</div><!--footer-top-->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 copyright">
						<p>Copyright &copy; 2019. All Rights Reserved. Escape Bookstore</p>
					</div><!--col-->
				</div><!--row-->
			</div><!--container-->
		</div><!--footer-bottom-->
	</footer><!--footer-->
</body>
</html>