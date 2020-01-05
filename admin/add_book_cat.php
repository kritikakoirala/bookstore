<?php

if(isset($_POST['add_book_cat'])){
   
        if(!empty($_POST['cat_id']))
        {
            $book_id = $_POST['book_id'];
            $cat_id = $_POST['cat_id'];
            $query = "INSERT INTO book_cat (book_id, cat_id) VALUES ($book_id, $cat_id)";
            $add_bookcat_query = mysqli_query($connection, $query);

        confirm($add_bookcat_query);
             if($add_bookcat_query){
                 echo "Category successfully added";
            }
           
        }
   
    else{
        echo "Please fill out all the fields";
    
    }
}   

?>

<form action="" method = "post">

<div class="form-group">
		<label for="book_id">Book Id</label>
		<input type="number" class = "form-control" name = "book_id" >
	</div>
	
    <div class="form-group">
		<label for="cat_id">Category Id</label>
		<input type="number" class = "form-control" name = "cat_id" >
	</div>

	<div class="form-group">
		<input type="submit" class = "btn btn-primary" name = "add_book_cat" value = "Add Category">
	</div>

</form>