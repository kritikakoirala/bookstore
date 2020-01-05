<?php
if(isset($_GET['bc_id'])){
	$the_book_cat_id = $_GET['bc_id'];
}

 $query = "SELECT * FROM book_cat WHERE book_id = $the_book_cat_id";
  $select_bookcat_by_id = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_bookcat_by_id)){
   
    $cat_id = $row['cat_id'];
}

if(isset($_POST['update_book_cat'])){
   
    $cat_id =  $_POST['cat_id'];

	$query = "UPDATE book_cat SET cat_id = '$cat_id' WHERE book_id  = {$the_book_cat_id}";
    $update_book_cat = mysqli_query($connection, $query);

    confirm($update_book_cat);

    if($update_book_cat){
        echo "Sucessfully Updated!";
    }
}

?>


<form action="" method = "post">
	
	<div class="form-group">
		<label for="title">Category Id</label>
		<input type="number" value = "<?php echo $cat_id;?>" class = "form-control" name = "cat_id" >
	</div>

	<div class="form-group">
		<input type="submit" class = "btn btn-primary" name = "update_book_cat" value = "Update Category" >
	</div>

</form>