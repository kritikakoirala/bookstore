<?php 
ob_start();?>
<header id="header">
			<div class="container-fluid">	
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">

					<!-- main header of the page -->
						<div class="main-header">
							<!-- top header includes site logo and login and search -->
							<div class="header-top">
								<div class="escape-logo">
									<a href="index.php"><img src="images/bookstore_logo.png" class = "img-fluid" alt="Escape Bookstore Logo"></a>
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

														
											<?php if (isset($_SESSION['user'])) {?>
											
												<div class = "logout">
													<p class = "username"><strong><?php echo $_SESSION['user']['username']; ?></strong></p>
													<span class = "usertype">(<?php echo ucfirst( $_SESSION['user']['user_type']); ?>)</span> 
														
													<br>
													<a href="logout.php" class = "logout-link">Logout</a>
													</div>
													<?php
												}
												else{?>
												<div class="login">
													<ul class="nav">
														<li class="nav-item">
															<a href="login.php" class="nav-link"> Login</a>			
														</li><!--.nav-item-->
														<li class="nav-item">
															<a href="register.php" class="nav-link"> Register</a>
															
														</li><!--.nav-item-->
													</ul><!--.nav-->
												</div><!--login-->

												<?php
												}
										
											?>
																			
								</div><!--header-middle-->
							
							</div><!--header-top-->

							<div class="header-bottom">
								<nav class="navbar navbar-expand-md bg-faded navbar-light">
									<button class="navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#collapsibleNavbar">
										<span class="navbar-toggler-icon"></span>
									</button>

									<div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
										<ul class="navbar-nav">
											<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
											<li class="nav-item"><a href="authors.php" class="nav-link">Authors</a></li>
											<li class="nav-item"><a href="categories.php" class="nav-link">Categories</a></li>
											<li class="nav-item"><a href="favorites.php" class="nav-link" data-hidden = "true">Favorites</a></li>
											<?php
											if(isset($_SESSION['user'])){
												echo '<li class="nav-item"><a href="admin/index.php" class="nav-link">Admin</a></li>';
											}?>
											<div class="hidden-login">
											<li class="nav-item"><a href="login.php" class="nav-link" data-hidden = "true">Login</a></li>
											
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