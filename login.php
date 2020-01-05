<?php 
session_start();
include 'includes/db.php';
include 'includes/header.php'; 
include 'includes/navigation.php'; 
include 'login_process.php'; 
?>
	  
    <div class = "container"> 
	<div class = "row">
	<div class = "col-lg-12">
        <h1 class = "login_heading">Login Form</h1>
       
        <form action="login.php" method = "post" id = "loginForm">
       	    <?php echo display_error(); ?>
            <div class="form-group">
                <label for="user"></label>
                <input type="text" class="form-control" placeholder="Username" id="user" name = "username" value = "<?php if(isset($_POST['username'])) echo $username; ?>">
            </div>

            <div class="form-group">
                <label for="pwd"></label>
                <input type="password" class="form-control" placeholder="Password" id="pwd" name = "password">
            </div>
                
			<button type="submit" class="btn btn-primary btn-block btn-submit" name = "loginBtn">Login</button>        

			<div class="form-group footer">
	

					<p>Not a member yet? <button type = "button" class = "btn btn-primary"  ><a href = "register.php">Register</a></button></p>
					
			</div>
        </form><!--form-->
    </div>
	</div>
	</div>