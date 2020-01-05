<?php 
session_start();
include "includes/header.php"; 
include "includes/menu.php";
include 'create_admin_process.php'; 
?>
	  
    <div class = "container"> 
	<div class = "row">
	<div class = "col-lg-12">
        <h1 class = "admin_heading">Create Admin User</h1>
       
        <form action="create_user.php" method = "post" id = "createAdminForm">
             <?php echo display_error(); ?>
            <div class="form-group">
                <label for="user"></label>
                <input type="text" class="form-control" placeholder="Username" id="user" name = "username" value = "<?php echo $username;?>">
            </div>

            <div class="form-group">
                <label for="email"></label>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name = "email" value = "<?php echo $email;?>">
            </div>

            <div class="form-group">
                <label for="age"></label>
                <select name = "age" id = "selectAge">
                    <option value = "age" selected>Age</option>
                    <option value = "below 20">Below 20</option>
                    <option value = "20-40">20-40</option>
                    <option value = "40-60">40-60</option>
                </select>
            </div>

            <div class="form-group">
                <label for="pwd"></label>
                <input type="password" class="form-control" placeholder="Password" id="pwd" name = "password1">
            </div>

            <div class="form-group">
                <label for="confirm-pwd"></label>
                <input type="password" class="form-control" placeholder="Confirm Password" id="confirm-pwd" name = "password2">
            </div>

            <div class="form-group">
                <label for="user_type"></label>
                <input type="text" class="form-control" placeholder="User type" id="user_type" name = "user_type">
            </div>
                
            <button type="submit" class="btn btn-primary btn-block btn-submit" name = "createBtn">Create Admin</button>        
        </form><!--form-->
    </div>
	</div>
	</div>