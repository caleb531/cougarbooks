<?php
session_start();
include('database.php');
include('redirection.php');

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

	$db->sign_in($email, $password);

	if( $_SESSION['signed_in'] === true ){

		cb_redirect_user_signin( $_POST['redirect_path'] );

	}else{
		// inform the user their login was incorrect
		cb_redirect( '../../sign-in.php?fail=1&redirect=' . urlencode( $_POST['redirect_path'] ) );
	}

}

?>
