<?php

if(isset($_POST['add_book'])){

	if(!empty($_POST['book_title'])|| !empty($_POST['book_authors']) ||  !empty($_POST['price']) ||  !empty($_POST['book_desc']) ||  !empty($_POST['book_pages']) ||  !empty($_POST['book_isbn']) ||  !empty($_POST['publication_year']) ||  !empty($_POST['book_rating']))
	
	{

		if(!empty($_FILES['image']['name']))
		{	
			$image_filetype = strtolower(pathinfo("..images/books/".$_FILES['image']['name'],PATHINFO_EXTENSION));

			if($image_filetype=="jpg" || $image_filetype=="jpeg"|| $image_filetype=="png")	
			{		
				if(!file_exists("../upload_images/".$_FILES['image']['name']))
				{
					
					

					$book_title =  mysqli_real_escape_string($connection, $_POST['book_title']);
					$book_authors =  mysqli_real_escape_string($connection, $_POST['book_authors']);
					$book_price =  $_POST['price'];
					$book_image = $_FILES['image']['name'];
					$book_image_temp =$_FILES['image']['tmp_name'];
					$book_desc =  mysqli_real_escape_string($connection, $_POST['book_desc']);
					$book_pages = $_POST['book_pages'];
					$book_isbn = $_POST['book_isbn'];
					$book_year = $_POST['publication_year'];
					$book_rating = $_POST['book_rating'];


					move_uploaded_file($book_image_temp, "../images/books/$book_image");
					$b_image = "images/books/$book_image";
					
					$query = "INSERT INTO book(book_title, book_authors, price, image_url, book_desc, book_pages, book_isbn, publication_year, book_rating) ";


					$query.= "VALUES('$book_title', '$book_authors', $book_price, '$b_image', '$book_desc', $book_pages, '$book_isbn', $book_year, $book_rating)";

					$add_book_query = mysqli_query($connection, $query);

					confirm($add_book_query);
					if($add_book_query){
						echo "Book successfully added";
					}
					
				}
				else{
					echo "File already uploaded. Please do not update with same name";
				}
			}
			else{
				echo "Wrong File Type";
			}
		}
		else{
			echo "Please Provide a file";
		} 
	}
	else{
		echo "Please fill out all the fields";
	}
}

?>

<form action="" method = "post" enctype = "multipart/form-data">
	
	<div class="form-group">
		<label for="book_title">Book Title</label>
		<input type="text" class = "form-control" name = "book_title" >
	</div>


	<div class="form-group">
		<label for="book_authors">Book Author</label>
		<input type="text" class = "form-control" name = "book_authors" >
	</div>

	<div class="form-group">
		<label for="price">Price</label>
		<input type="number" step = "0.01" min="0" class = "form-control" name = "price" >
	</div>

	<div class="form-group">
		<label for="book_image">Book Image</label>
		<input type="file" name = "image" >
	</div>
	
	<div class="form-group">
		<label for="book_desc">Book Description</label>
		<textarea name="book_desc" id="" class = "form-control" cols="30" rows="10"></textarea>
	</div>

	<div class="form-group">
		<label for="book_pages">Book Pages</label>
		<input type="number" class = "form-control" name = "book_pages" >
	</div>

	<div class="form-group">
		<label for="book_isbn">Book Isbn</label>
		<input type="text" class = "form-control" name = "book_isbn" >
	</div>

	<div class="form-group">
		<label for="book_year">Book Publication Year</label>
		<input type="number" class = "form-control" name = "publication_year" >
	</div>

	<div class="form-group">
		<label for="book_rating">Book Rating</label>
		<input type="number" step = "0.1" min="0" class = "form-control" name = "book_rating" >
	</div>
	
	<div class="form-group">

		<input type="submit" class = "btn btn-primary" name = "add_book" value = "Add New Book" >
	</div>

</form>