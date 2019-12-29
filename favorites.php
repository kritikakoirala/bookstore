<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Favprites page of bookstore</title>
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
	
	<section id="favorites">
		<h2>Your saved favorites</h2>
		<button class="btn clear-all-btn">Clear all the saved items </button><!--clear-all-btn-->

		<div class="container favorites-list">
			<table class="table-bordered">
				<thead>
					<tr>
						<th>Product</th>
						<th>Title</th>
						<th>Price</th>
						<th>Description</th>
						<th>Remove This Product</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class = "product_thumbnail"><a href="#"><img src="images/woman.jpg" alt=""></a></td>
						<td>Long way</td>
						<td>$2.40</td>
						<td>Your saved favorites Your saved favorites Your saved favorites Your saved favorites.</td>
						<td><button class="removeItem-btn btn"> Remove</button></td>
					</tr>

					<tr>
						<td class = "product_thumbnail"><a href="#"><img src="images/sea.jpg" alt=""></a></td>
						<td>Long way</td>
						<td>$2.40</td>
						<td>Your saved favorites Your saved favorites Your saved favorites Your saved favorites.</td>
						<td><button class="removeItem-btn btn"> Remove</button></td>
					</tr>
					<tr>
						<td class = "product_thumbnail"><a href="#"><img src="images/underwater.jpg" alt=""></a></td>
						<td>Long way</td>
						<td>$2.40</td>
						<td>Your saved favorites Your saved favorites Your saved favorites Your saved favorites.</td>
						<td><button class="removeItem-btn btn"> Remove</button></td>
					</tr>
					<tr>
						<td class = "product_thumbnail"><a href="#"><img src="images/flower.jpg" alt=""></a></td>
						<td>Long way</td>
						<td>$2.40</td>
						<td>Your saved favorites Your saved favorites Your saved favorites Your saved favorites.</td>
						<td><button class="removeItem-btn btn"> Remove</button></td>
					</tr>
				</tbody>
			</table><!--.table-bordered-->
		</div><!--container-->
	</section><!--favorites-->

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