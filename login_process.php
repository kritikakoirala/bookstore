<?php

$errors = array();
if(isset($_POST['loginBtn'])){
     $username = e($_POST['username']);
     $password = e($_POST['password']);
    if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
    }
    
    
    if(count($errors)== 0){
		$query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $results = mysqli_query($connection, $query);
        
        
        if (mysqli_num_rows($results) == 1) { // user found

            while($row = mysqli_fetch_assoc($results)){

               

                if(password_verify($password, $row["password"])){
          
                    // check if user is admin or user
                    $logged_in_user = $row;
                    if ($logged_in_user['user_type'] == 'admin') {
    
                        $_SESSION['user'] = $logged_in_user;
                        $_SESSION['success']  = "You are now logged in";
                        header('location: admin/index.php');		  
                    }
                    else{
                        $_SESSION['user'] = $logged_in_user;
                        $_SESSION['success']  = "You are now logged in";
    
                        header('location: index.php');
                    }
                }
                else{
                    array_push($errors, "Wrong username or password");
                }
            }
            
            
        }
        else {
			array_push($errors, "The username entered is unregistered in our system. Please register before login");
		}
    }
}
// return user array of the id
function getUserById($id){
	global $connection;
	$query = "SELECT * FROM users WHERE user_id=" . $id;
	$result = mysqli_query($connection, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}
// escape string
function e($val){
	global $connection;
	return mysqli_real_escape_string($connection, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
