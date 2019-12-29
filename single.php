<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Single Page for the products</title>
  <link rel="stylesheet" href="css/style.css">
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
    
	<section id="book-intro">
		<div class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="book">
							<img src="images/fantasy.jpg" alt="mask">
							<div class="left-side">
								<h2>
									<span>William Goldsber</span>
									<span>1984</span>
								</h2>
							</div><!--left-->
						</div>	<!--book-->					
					</div><!--col-->

					<div class="col-lg-8 col-md-6">
						<div class="card">
							<div class="card-header by-book">
								<h3>World War II</h3>
								<span>by: <a href = ""> William Goldsber</a></span>
							</div><!--card-header-->
							<div class="card-body">
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
								<p class="book-price">$2.40</p>
							</div><!--card-body-->
							<div class="card-footer">
								<button class="btn favorites-btn fas fa-heart"> Add to Favorites</button>
								<p class="tags"><span>Tags:</span><a href="">History</a> , <a href="">War</a></p>
							</div><!--card-footer-->
						</div><!--card-->
					</div><!--col-->
				</div><!--row-->
			</div><!--container-->
		</div><!--jumbotron-->
	</section><!--#book-intro-->
	
	<section id="author-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<h5 class = "title">Meet The Author</h5>
					<div class="author-description">
						<div class="row">
							<div class="col-lg-6">
								<div class="author-img">
									<img src="images/flower.jpg" alt="Author photo">
								</div>
								
							</div><!--col-->

							<div class="col-lg-6">
								<div class="about-author">
									<a href = "" class = "author-name">William Goldsberg</a>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam </p>
									<div class="social-media">
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
									</div><!--social-media-->
								</div><!--about-author-->
							</div><!--col-->
						</div><!--row-->
					</div>
				</div><!--row-->

				<div class="col-lg-6 col-md-12">
					<h5 class = "title">More Books by the Author</h5>
					<div class="more-books">
						<div class="more-books-img">
							<img src="images/witch_house.jpg" alt="Slider 1">
							<div class="hover-contents">
								<div class="hover-btns">
									<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>									
								</div>	<!--hover-btns-->
							</div><!--hover-contents-->
						</div><!--card-img-top-->

						<div class="more-books-img">
							<img src="images/fantasy.jpg" alt="Slider 1">
							<div class="hover-contents">
								<div class="hover-btns">
									<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
									
								</div>	<!--hover-btns-->
							</div><!--hover-contents-->
						</div><!--card-img-top-->

						<div class="more-books-img">
							<img src="images/portrait.jpg" alt="Slider 1">
							<div class="hover-contents">
								<div class="hover-btns">
									<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
									
								</div>	<!--hover-btns-->
							</div><!--hover-contents-->
						</div><!--card-img-top-->

						<div class="more-books-img">
							<img src="images/sea.jpg" alt="Slider 1">
							<div class="hover-contents">
								<div class="hover-btns">
									<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
									
								</div>	<!--hover-btns-->
							</div><!--hover-contents-->
						</div><!--card-img-top-->

					</div><!--more-books-->
				</div><!--col-->
			</div><!--row-->
		</div><!--container-->
	</section><!--#author-section-->

	<section id="book-description">
		<div class="container">
			<div class="row">
				<div class="left-detail col-lg-3">
					<h5 class="left-title">About this Book</h5>
						<div class="book-list">
							<ul class="nav flex-column">
								<li class="nav-item">
									<a href="#overview" class="nav-link">Overview</a>
								</li>
								<li class="nav-item">
									<a href="#details" class="nav-link">Details</a>
								</li>
								<li class="nav-item">
									<a href="#reviews" class="nav-link">Reviews(1)</a>
								</li>
							</ul>
						</div><!--book-list-->
				</div><!--left-detail-->

				<div class="right-detail col-lg-9">
					<div class="book-overview col-sm-12" id = "overview">
						<span class = "overview-title">Overview</span>
							<p class = "overview-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
					</div><!--book-overview-->

					<div class="desc-detail col-sm-12" id = "details">
						<span class = "book-detail-title">Details</span>
							<p><span>SKU: </span>123467890643</p>
							<p><span>Publisher: </span>William Goldsberg</p>
							<p><span>Publish Date: </span>1990</p>
							<p><span>Page Count: </span>3000</p>
					</div><!--desc-detail-->

					<div class="book-review col-sm-12" id = "reviews">
						<span class = "review-title">Your reviews</span>
							<form action="">
								<div class="form-group">
									<textarea class = "form-control" name="revies" id="rating-review" cols="30" rows="5" placeholder = "Tell us what you think about this book"></textarea>
								</div><!--form group-->
							
								<div class="form-group">
									<input type="text" name = "username" class = "form-control" placeholder = "Name">
								</div><!--form-group-->

								<div class="form-group">
									<input type="email" name = "username" class = "form-control" placeholder = "Email">
								</div><!--form-group-->
								<button type = "submit" name = "submitReview" class = "btn reviewBtn">submit</button>
							</form><!--form-->
					</div><!--book-review-->
				</div><!--right detail-->
			</div><!--row-->
		</div><!--container-->
	</section><!--book-description-->

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
</body>
</html>