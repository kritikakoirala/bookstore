
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Admin</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>


  <!-- Navbar links -->
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav top-nav">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Home</a>
      </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Admin
            </a>
            <div class="dropdown-menu">           
                <a class="dropdown-item" href="#">Profile</a>                   
                <a class="dropdown-item" href="../logout.php">Logout</a>
				<a class="dropdown-item" href="create_user.php">Add new admin</a>

            </div>
    </li>
      
    </ul>
  </div>
</nav>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark justify-content-center">
	<ul class="navbar-nav ">
		<li class = "nav-item">
			<a class = "nav-link" href=" index.php"> Dashboard</a>
		</li>

		<li class = "nav-item dropdown">

			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				Category
			</a>

				<div class="dropdown-menu">           
					<a class = "dropdown-item" href="category.php?source=view_all_categories.php">View All Categories</a>                  
					<a class = "dropdown-item" href="category.php?source=add_categories">Add new Category</a>
				</div><!--dropdown-menu-->
		</li>
		<li class = "nav-item dropdown">

			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				Books
			</a>

				<div class="dropdown-menu">           
					<a class = "dropdown-item" href="books.php?source=view_all_books.php">View All Books</a>             
					<a class = "dropdown-item" href="books.php?source=add_book">Add new Book</a>
				</div><!--dropdown-menu-->
		</li>
		<li class = "nav-item dropdown">

			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				Book Category
			</a>

				<div class="dropdown-menu">           
				<a class = "dropdown-item" href="book_cat.php?source=view_all_book_cat.php">View All Book Categories</a>           
				<a class = "dropdown-item" href="book_cat.php?source=add_book_cat">Add new Book Category</a>
				</div><!--dropdown-menu-->
		</li>

	</ul><!--nav-->


</nav>