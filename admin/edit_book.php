<?php
if(isset($_GET['b_id'])){
	$the_book_id = $_GET['b_id'];
}

 $query = "SELECT * FROM book WHERE book_id = $the_book_id";
  $select_books_by_id = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_books_by_id)){
    $book_title =  $row['book_title'];
    $book_authors = $row['book_authors'];
    $book_price = $row['price'];
    $book_image = $row['image_url'];
    $book_desc =  $row['book_desc'];
    $book_pages = $row['book_pages'];
    $book_isbn = $row['book_isbn'];
	$book_year = $row['publication_year'];
	$book_rating = $row['book_rating'];
}

if(isset($_POST['update_book'])){

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

	if(empty($book_image)){
		$query = "SELECT * FROM book WHERE book_id = $the_book_id";
		$select_image = mysqli_query($connection, $query);
		while($row = mysqli_fetch_assoc($select_image)){
			$book_image = $row['image_url'];
		}
	}


	$query = "UPDATE book SET book_title = '$book_title', book_authors = '$book_authors', price = $book_price, image_url = '$book_image', book_desc = '$book_desc', book_pages = $book_pages, book_isbn = '$book_isbn', publication_year = $book_year, book_rating = $book_rating WHERE book_id = $the_book_id";
	
    $update_book = mysqli_query($connection, $query);

	confirm($update_book);
	
	if($update_book){
		echo "Book successfully updated";
	}
}

?>


<form action="" method = "post" enctype = "multipart/form-data">
	
	<div class="form-group">
		<label for="title">Book Title</label>
		<input type="text" value = "<?php echo  $book_title;?>" class = "form-control" name = "book_title" >
	</div>

	<div class="form-group">
		<label for="authors">Book Authors</label>
		<input type="text" value = "<?php echo $book_authors;?>" class = "form-control" name = "book_authors" >
	</div>

	<div class="form-group">
		<label for="price">Book Price</label>
		<input type="number" step = "0.01" min = "0" value = "<?php echo $book_price;?>" class = "form-control" name = "price" >
	</div>

	<div class="form-group">
        <label for="image">Image</label>
		<img width = "100" src="<?php echo $book_image?>" alt="book_thumbnail"><br/><br>
		<input type="file" name = "image" >
	</div>

	<div class="form-group">
		<label for="book_desc">Book Description</label>
		<textarea class = "form-control" name = "book_desc" id="" class = "form-control"  cols="30" rows="10" ><?php echo $book_desc;?></textarea>
	</div>


	<div class="form-group">
		<label for="book_pages">Book Pages</label>
		<input  type="number" name="book_pages" value = "<?php echo $book_pages;?>">
	</div>

    <div class="form-group">
		<label for="book_isbn">Book ISBN</label>
		<input type="text" name="book_isbn" value = "<?php echo $book_isbn;?>">
	</div>

    <div class="form-group">
		<label for="book_year">Book Published Year</label>
		<input type="number" name="publication_year" value = "<?php echo $book_year;?>">
	</div>

	<div class="form-group">
		<label for="book_rating">Book Rating</label>
		<input type="number" step = "0.1" min="0" class = "form-control" name = "book_rating" value = "<?php echo $book_rating;?>">
	</div>

	<div class="form-group">
		<input type="submit" class = "btn btn-primary" name = "update_book" value = "Update Book" >
	</div>

</form>