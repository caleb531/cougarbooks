<?php
session_start();
include('database.php');

// function used for user to sign in


// set the variables that will be passed into the database to check
// if the users entered information matches the DB
	if( isset( $_POST['email'] ) ){
		$email = $_POST['email'];
	}
	if( isset( $_POST['password'] ) ){
		$password = $_POST['password'];
	}

	if( isset( $_POST['submit'] ) ){
		$user_id = $db->sign_in($email, $password);

		if( $user_id ){
			// set session variables to be used to verify the users information
			$_SESSION['signed_in'] = true;
			$_SESSION['user_id'] = $user_id;

			// redirect to signed in users ads
			header("Location: ../../my-ads.php?user=$user_id");
		}else{
			// inform the user their login was incorrect
			header("Location: ../../sign-in.php?loginFailed=1");
		}


	}






?>