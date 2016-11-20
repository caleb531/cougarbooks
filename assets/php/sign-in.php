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

	$db->sign_in($email, $password);

	if( isset( $_SESSION['signed_in'] ) ){
		// redirect to signed in users ads
		header("Location: ../../my-ads.php");
	}else{
		// inform the user their login was incorrect
		header("Location: ../../sign-in.php?loginFailed=1");
	}

}

?>
