<?php
include 'includes/db.php';
include 'includes/header.php'; 
include 'includes/navigation.php'; 
include 'register_process.php'; 

if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: register.php');
}
?>
	  
	
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