<?php

$username = "";
$email = "";
$errors = array();

if(isset($_POST['registerBtn'])){
    global $errors, $username, $email;
    $username = e($_POST['username']);
    $email = e($_POST['email']);
    $age = e($_POST['age']); 
    $password_1 = e($_POST['password1']);
    $password_2 = e($_POST['password2']);
    if(isset($_POST['termsCheckbox']))
    $terms_condition_checkbox = e($_POST['termsCheckbox']);
    // form validation

    if(empty($username)){
       array_push($errors, "Username is required");
    }
    if(is_numeric($username)){
        array_push($errors, "Only alphabets are allowed in username");
    }
    if(empty($email)){
        array_push($errors, "Email is required");
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Enter the email in a correct format. Eg. abc@gmail.com");
    }
    if(empty($age)){
        array_push($errors, "Age is required");
    }
    if(empty($terms_condition_checkbox)){
        array_push($errors, "Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy");
    }

    if (empty($password_1)) { 
        array_push($errors, "Password is required"); 
    }

    if (preg_match("^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$", $password_1 )){
        array_push($errors, "Password should be at 8 characters at minimum and contain at least one Uppercase letter, one number and one symbol");
    }
    
	if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    if(count($errors) == 0)
    {
        $password = password_hash($password_1, PASSWORD_DEFAULT);


        if(isset($_POST['user_type'])){
            $user_type = e($_POST['user_type']);
            $query = "INSERT INTO users (username, user_email, password, user_type, age)";
            $query.= "VALUES('$username', '$user_email', '$password', '$user_type', '$age')";
    
            $register_query = mysqli_query($connection, $query);
            if(!$register_query){
                die( "error!".mysqli_error($connection));
            }
            $_SESSION['success'] = "New user successfully created";
            header("location:register.php?ok=1");
        }
        else{
            $query = "INSERT INTO users (username, user_email, password, user_type, age) 
                      VALUES('$username', '$email','$password', 'user', '$age')";
                      
            $register_login_query = mysqli_query($connection, $query);
            if(!$register_login_query){
                die( "error!".mysqli_error($connection));
            }
            // id of created user
            $logged_in_user_id = mysqli_insert_id($connection);
            $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
            $_SESSION['success']  = "You are now logged in";
          
			header("location: index.php");				
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

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
