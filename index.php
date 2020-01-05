
<?php
session_start();

include 'includes/db.php';
include 'includes/header.php';
include 'includes/navigation.php'; ?>
	
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
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">							
							<div  class="card-deck owl-carousel owl-theme">	
											
							<?php
								$query = "SELECT * FROM book LIMIT 10";
								$bestseller_select_query = mysqli_query($connection, $query);

								while($row = mysqli_fetch_assoc($bestseller_select_query)){
									$book_id = $row['book_id'];
									$book_title = $row['book_title'];
									$book_author = $row['book_authors'];
									$book_price = $row['price'];
									$book_image = $row['image_url'];
									?>

									<div class="card">		
										<div class="card-img-top">
											<img src="<?php echo $book_image; ?>" alt="Slider 1">
											<div class="hover-contents">
												<div class="hover-btns">
													<a href="single.php?id=<?php echo $book_id;?>" class = "view-btn"><i class="fas fa-eye"></i></a><br>
													
													<?php
													if(isset($_SESSION['user'])){?>
														<a href="favorites.php" class = "fav-btn"> + </a>;	
														<?php
													}
													
													?>

													
												</div>	<!--hover-btns-->
											</div><!--hover-contents-->
										</div><!--card-img-top-->					
									
										<div class="card-body book-info">
											<span class="card-title"><a href = "single.php?id=<?php echo $book_id;?>"><?php echo $book_title?></a></span><!--.card-title-->
											<span class="card-text">by:<a href = "author.php"> <?php echo $book_author; ?></a></span>
											<span class="card-price"><?php echo '$'.$book_price; ?></span>
										</div><!--card-body-->							
									</div><!--card-->
								<?php
								}
							?>
																	
							
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
							<?php
								$query = "SELECT * FROM book WHERE publication_year>YEAR(CURRENT_TIMESTAMP)-5 LIMIT 10";
								$latest_select_query = mysqli_query($connection, $query);

								while($row = mysqli_fetch_assoc($latest_select_query)){
									$book_id = $row['book_id'];
									$book_title = $row['book_title'];
									$book_author = $row['book_authors'];
									$book_price = $row['price'];
									$book_image = $row['image_url'];
									?>

									<div class="card">		
										<div class="card-img-top">
											<img src="<?php echo $book_image; ?>" alt="Slider 1">
											<div class="hover-contents">
												<div class="hover-btns">
													<a href="single.php?id=<?php echo $book_id;?>" class = "view-btn"><i class="fas fa-eye"></i></a><br>
													<?php
													if(isset($_SESSION['user'])){?>
														<a href="favorites.php" class = "fav-btn"> + </a>;	
														<?php
													}
													
													?>
												</div>	<!--hover-btns-->
											</div><!--hover-contents-->
										</div><!--card-img-top-->					
									
										<div class="card-body book-info">
											<span class="card-title"><a href = "single.php?id=<?php echo $book_id;?>"><?php echo $book_title?></a></span><!--.card-title-->
											<span class="card-text">by:<a href = "author.php"> <?php echo $book_author; ?></a></span>
											<span class="card-price"><?php echo '$'.$book_price; ?></span>
										</div><!--card-body-->							
									</div><!--card-->
								<?php
								}
							?>
												
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
							<?php
								$query = "SELECT * FROM book WHERE book_rating>4.5";
								$popular_select_query = mysqli_query($connection, $query);

								while($row = mysqli_fetch_assoc($popular_select_query)){
									$book_title = $row['book_title'];
									$book_author = $row['book_authors'];
									$book_price = $row['price'];
									$book_image = $row['image_url'];
									?>

									<div class="card">		
										<div class="card-img-top">
											<img src="<?php echo $book_image; ?>" alt="Slider 1">
											<div class="hover-contents">
												<div class="hover-btns">
													<a href="single.php?id=<?php echo $book_id;?>" class = "view-btn"><i class="fas fa-eye"></i></a><br>
													<?php
													if(isset($_SESSION['user'])){
														echo '<a href="favorites.php" class = "fav-btn"> + </a>';
													}
													?>
												</div>	<!--hover-btns-->
											</div><!--hover-contents-->
										</div><!--card-img-top-->					
									
										<div class="card-body book-info">
											<span class="card-title"><a href = "single.php?id=<?php echo $book_id;?>"><?php echo $book_title?></a></span><!--.card-title-->
											<span class="card-text">by:<a href = "author.php"> <?php echo $book_author; ?></a></span>
											<span class="card-price"><?php echo '$'.$book_price; ?></span>
										</div><!--card-body-->							
									</div><!--card-->
								<?php
								}
							?>
							
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

		
	
<?php include 'includes/footer.php'; ?>