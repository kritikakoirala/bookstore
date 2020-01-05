<?php session_start(); ?>
<?php 
include 'includes/db.php'; 
include 'includes/header.php'; 
include 'includes/navigation.php';


?>

	<section id="category">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="sort-products">			
						<!-- search box -->
						
						<form action="sort.php" method = "get" name = "orderby_form">
							<label for="sort_dropdown">Sort By:</label>
							<select name="orderby" onChange="orderby_form.submit();" id="sort_dropdown">
							
								<option value='asc'>Ascending</option>
								<option value='desc'>Descending</option>
								<option value='date'>Date</option>
								<option value='popularity'>Popularity</option>
								
							</select>
						</form>
					</div>	<!--.form-search-->
				</div><!--col-->
			</div><!--row-->

			<div class="row">
			
				<div class="col-lg-3 order-lg-1 col-md-3 order-md-1 col-sm-6 col-12
				     order-2 order-sm-2">
					<div class="category-list">
						<h4 class = "cat_header">All Categories</h4>
						<ul class="nav categories flex-column">

						<?php 
						
							$query = "SELECT * FROM categories";
							$cat_query = mysqli_query($connection, $query);
							while($row = mysqli_fetch_assoc($cat_query)){
							?>
								<li class="nav-items">
									<a href="categories.php?id='<?php echo $row['cat_id'];?>'" class="nav-link"><?php echo $row['cat_name']; ?></a>
								</li><!--nav-items-->
							<?php							
						}
						?>
						</ul><!--nav-->
					</div>	<!--category_list-->
					
					<div class="price-list">
						<h4 class = "price_header">Filter By Price</h4>
						<div class="form-price-range-filter">
							<div id="slider-range"></div>
							<form method="post" action="">
								<input type="hidden" id="amount1" name = "min" value = "<?php echo $amount1; ?>">
								<input type="hidden" id="amount2" name = "max" value = "<?php echo $amount2; ?>">
								<input type="submit" class = "filter-submit" name="submit_range" value="Submit">
							</form>
							<p class = "slider-price">Price Range:<p id="amount"></p>
						</div>
					</div>
							
				
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

				<div class="col-lg-9  order-lg-2 col-md-9 order-md-2 col-sm-12 col-12 		      order-1 order-sm-1">
					<div class="book-items">
						<div class="row items">
							<!-- category filter -->
							<?php
								$id = $_GET['id'];
								if(isset($_GET['id'])){
									$id = $_GET['id'];
								}
								$totalq= "SELECT count(*) \"total\" FROM book, book_cat WHERE book_cat.book_id=book.book_id AND $id=book_cat.cat_id";
								$totalresult = mysqli_query($connection, $totalq);
								$totalrow = mysqli_fetch_assoc($totalresult);
				
								$results_per_page = 5;
				
								$page_total_rec=$totalrow['total'];
					
								$page_total_page=ceil($page_total_rec/$results_per_page);
				
								if(isset($_GET['page'])){
									$page = $_GET['page'];
								}
								else{
									$page=1;
								}
								
                                $start_from = ($page-1)*$results_per_page;
                                $query = "SELECT * FROM book, book_cat WHERE book_cat.book_id=book.book_id AND $id=book_cat.cat_id LIMIT $start_from, ".$results_per_page;
                                $cat_select_query = mysqli_query($connection, $query);
							
								
								
								while($row = mysqli_fetch_assoc($cat_select_query)){
								?>
									
										<div class="col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="card">					
												<div class="card-img-top">
													<img src="<?php echo $row['image_url'];?>" class = "img-fluid" alt="Slider 1">
													<div class="hover-contents">
														<div class="hover-btns">
														<a href="single.php?id=<?php echo $row['book_id'];?>" class = "view-btn"><i class="fas fa-eye"></i></a><br>
															<a href="" class = "fav-btn"> + </a>
														</div>	<!--hover-btns-->
													</div><!--hover-contents-->
												</div><!--card-img-top-->	
												<div class="card-body book-info">
													<span class="card-title"><a href = "single.php?id=<?php echo $row['book_id'];?>"><?php echo $row['book_title'];?></a></span><!--.card-title-->
													<span class="card-text">by:<a href = "#"> <?php echo $row['book_authors']?></a></span>
													<span class="card-price"><?php echo $row['price'];?></span>
													
												</div><!--card-body-->	
											</div><!--card-->
										</div><!--col-->
									
								<?php
								}
								include 'price_filter.php';
								
							?>

							<!-- price filter -->
							
						</div><!--row items-->
						
					</div><!--book-items-->

				<?php include 'includes/pagination.php';?>
				</div><!--col-->
				
			</div><!--row-->

		</div><!--container-->
	</section><!--category-->

<?php include 'includes/footer.php'; ?>