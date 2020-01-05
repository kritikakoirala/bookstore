<?php
if(isset($_GET['c_id'])){
	$the_cat_id = $_GET['c_id'];
}

 $query = "SELECT * FROM categories WHERE cat_id = $the_cat_id";
  $select_cat_by_id = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_cat_by_id)){
    $cat_id = $row['cat_id'];
    $cat_name = $row['cat_name'];
   
}

if(isset($_POST['update_cat'])){
    $cat_name =  $_POST['cat_name'];


	$query = "UPDATE categories SET cat_name = '$cat_name' WHERE cat_id  = {$the_cat_id}";
    $update_cat = mysqli_query($connection, $query);

    confirm($update_cat);

    if($update_cat){
        echo "Sucessfully Updated!";
    }
}

?>


<form action="" method = "post" enctype = "multipart/form-data">
	
	<div class="form-group">
		<label for="title">Category Name</label>
		<input type="text" value = "<?php echo  $cat_name;?>" class = "form-control" name = "cat_name" >
	</div>

	<div class="form-group">
		<input type="submit" class = "btn btn-primary" name = "update_cat" value = "Update Category" >
	</div>

</form>