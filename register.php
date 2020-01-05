<?php 
session_start();
include 'includes/db.php';
include 'includes/header.php'; 
include 'includes/navigation.php'; 
include 'register_process.php'; 
?>
	  
    <div class = "container"> 
        <h1 class = "register_heading">Registration Form</h1>
        <?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
        <form action="register.php" method = "post" id = "registerForm">
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

            <div class="form-group form-check">           
                <input type="checkbox" name = "termsCheckbox" value = "check" id = "agree" class="form-check-input">
                <label class="form-check-label" for="agree">I agree to the <a href = "">Terms and Conditions</a></label>
                </div>
                
                 <button type="submit" class="btn btn-primary btn-block btn-submit" name = "registerBtn">Register</button>        

                <div class="form-group footer">
                    <p>Already a member? <button type = "button" class = "btn btn-primary"  ><a href = "login.php">Login</a></button></p>
                </div>
        </form><!--form-->
    </div>