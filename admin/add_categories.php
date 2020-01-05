<?php

if(isset($_POST['add_cat'])){
    $cat_name = $_POST['cat_name'];
        if(empty($cat_name)){
            echo "Please fill out all the fields";
        }
   
    else{
       
        $query = "INSERT INTO categories (cat_name) ";

        $query.= "VALUE('$cat_name')";
 
        $add_cat_query = mysqli_query($connection, $query);

        confirm($add_cat_query);
        if($add_cat_query){
            echo "Category successfully added";
        }
    
    }
}   

?>

<form action="" method = "post">
	
    <div class="form-group">
		<label for="title">Category Name</label>
		<input type="text" class = "form-control" name = "cat_name" >
	</div>

	<div class="form-group">
		<input type="submit" class = "btn btn-primary" name = "add_cat" value = "Add Category">
	</div>

</form>