<?php 
session_start();
include 'includes/db.php';
include 'includes/header.php'; ?>

<!-- Navigation -->
<?php include 'includes/navigation.php'; ?>
	
<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
		
	$query = "SELECT * FROM book WHERE book_id=$id";
	$single_select_query = mysqli_query($connection, $query);
	while($row = mysqli_fetch_assoc($single_select_query)){
		$book_title = $row['book_title'];
		$book_author = $row['book_authors'];
		$book_price = $row['price'];
		$book_image = $row['image_url'];
		$book_cat  = $row['genres'];
		$book_desc = $row['book_desc'];
		$book_pages = $row['book_pages'];
		$book_isbn = $row['book_isbn'];
		$published_year = $row['publication_year'];
	}
?>
	<section id="book-intro">
		<div class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="book">
							<img src="<?php echo $book_image; ?>" alt="mask">
							<div class="left-side">
								<h2>
									<span><?php echo $book_author; ?></span>
									<span><?php echo $published_year; ?></span>
								</h2>
							</div><!--left-->
						</div>	<!--book-->					
					</div><!--col-->

					<div class="col-lg-8 col-md-6">
						<div class="card">
							<div class="card-header by-book">
								<h3><?php echo $book_title; ?></h3>
								<span>by: <a href = "author.php"> <?php echo $book_author; ?></a></span>
							</div><!--card-header-->
							<div class="card-body">
								<p><?php echo $book_desc; ?></p>
								<p class="book-price">$<?php echo $book_price; ?></p>
							</div><!--card-body-->
							<div class="card-footer">
							<?php
								if(isset($_SESSION['user'])){
									echo '<button class="btn favorites-btn fas fa-heart"> Add to Favorites</button>';
								}
							?>
								
								<p class="tags"><span>Tags:</span>
								<a href="#"><?php echo $book_cat;?></a>
							</p>
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
				<div class="col-lg-6 col-md-12 col-sm-12">
					<h5 class = "title">Meet The Author</h5>
					<div class="author-description">
						<div class="row">
							<div class="col-lg-6 col-md-4 col-sm-4">
								<div class="author-img">
									<img src="images/flower.jpg" alt="Author photo">
								</div>
								
							</div><!--col-->

							<div class="col-lg-6 col-md-8 col-sm-8">
								<div class="about-author">
									<a href = "" class = "author-name"><?php echo $book_author; ?></a>
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
					</div><!--author-description-->
				</div><!--row-->

			
				<div class="col-lg-6 col-md-12 col-sm-12">
					<h5 class = "title">More Books by the Author</h5>
					<div class="more-books">

						<?php
						
							$query = "SELECT * FROM book WHERE book_id=$id GROUP BY book_authors LIMIT 4";
							$image_query = mysqli_query($connection, $query);
							while($row = mysqli_fetch_assoc($image_query)){
								?>
								<div class="more-books-img">
									<img src="<?php echo $row['image_url']; ?>" alt="Slider 1">
									<div class="hover-contents">
										<div class="hover-btns">
											<a href="" class = "view-btn"><i class="fas fa-eye"></i></a><br>
											
										</div>	<!--hover-btns-->
									</div><!--hover-contents-->
								</div><!--more-books-img-->
							<?php
							}
						?>
					</div><!--more-books-->
				</div><!--col-->
			</div><!--row-->
		</div><!--container-->
	</section><!--#author-section-->

	<section id="book-description">
		<div class="container">
			<div class="row">
				<div class="left-detail col-lg-3 col-md-3">
					<h5 class="left-title">About this Book</h5>
						<div class="book-list">
							<ul class="nav flex-lg-column flex-md-row flex-sm-row">
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

				<div class="right-detail col-lg-9 col-md-9">
					<div class="book-overview col-sm-12" id = "overview">
						<span class = "overview-title">Overview</span>
							<p class = "overview-desc"><?php echo $book_desc;?></p>
					</div><!--book-overview-->

					<div class="desc-detail col-sm-12" id = "details">
						<span class = "book-detail-title">Details</span>
							<p><span>ISBN: </span><?php echo $book_isbn; ?></p>
							<p><span>Author: </span><?php echo $book_author; ?></p>
							<p><span>Publish Date: </span><?php echo $published_year; ?></p>
							<p><span>Page Count: </span><?php echo $book_pages; ?></p>
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

<?php include 'includes/footer.php'; ?>