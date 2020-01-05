<?php

$username = "";
$email = "";
$errors = array();

if(isset($_POST['createBtn'])){
    global $errors, $username, $email;
    $username = e($_POST['username']);
    $email = e($_POST['email']);
    if(isset($_POST['user_type'])){
        $user_type = e($_POST['user_type']);
    }  
    $age = e($_POST['age']); 
    $password_1 = e($_POST['password1']);
    $password_2 = e($_POST['password2']);

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
    if(empty($user_type)){
        array_push($errors, "User type is required");
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Enter the email in a correct format. Eg. abc@gmail.com");
    }
    if(empty($age)){
        array_push($errors, "Age is required");
    }
   

    if (empty($password_1)) { 
        array_push($errors, "Password is required"); 
    }

    if (preg_match("^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$", $password_1)){
        array_push($errors, "Password should be at 8 characters at minimum and contain at least one Uppercase letter, one number and one symbol");
    }
    
	if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    if(count($errors) == 0)
    {
        $password = password_hash($password_1, PASSWORD_DEFAULT);
       
            $user_type = e($_POST['user_type']);
            $query = "INSERT INTO users (username, user_email, password, user_type, age)";
            $query.= "VALUES('$username', '$user_email', '$password', '$user_type', '$age')";
    
            $register_query = mysqli_query($connection, $query);
            if(!$register_query){
                die( "error!".mysqli_error($connection));
            }
            $_SESSION['success'] = "New Admin successfully created";
            header("location:index.php");
    
       
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

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}