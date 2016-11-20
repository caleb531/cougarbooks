<?php
session_start();
include('database.php');

// Format thte book ISBN by removing dashes
function cb_format_telephone_no( $telephone_num ) {
	return trim( str_replace( '-', '', $telephone_num ) );
}

// hash the password in order to save into database
function hash_password( $password ){
	// higher cost will be more secure but will require more processing power
	$cost = 5;

 	// create a random salt
 	$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

	// Prefix information about the hash so PHP knows how to verify it later.
	// "$2a$" means we are using the Blowfish Algorithm
 	$salt = sprintf("$2a$%02d$", $cost) . $salt;

	// hash the password with the salt
 	$hash = crypt($password, $salt);

	return $hash;

}

// get all the variables that were passed from the form
// when the user registered
if( ! empty( $_POST['submit'] ) ){

	if( !empty( $_POST['first_name'] ) ){
		$first_name = $_POST['first_name'];
	}

	if( !empty( $_POST['last_name'] ) ){
		$last_name = $_POST['last_name'];
	}

	if( !empty( $_POST['email'] ) ){
		$email_address = $_POST['email'];
	}

	if( !empty( $_POST['phone'] ) ){
		$telephone_no = $_POST['phone'];
	}

	if( !empty( $_POST['password'] ) ){
		$user_password = $_POST['password'];
	}

	if( !empty( $_POST['confirm_password'] ) ){
		$confirm_password = $_POST['confirm_password'];
	}

	// make sure that both the password and confirmed password matches
	// in order to avoid the user entering incorrect password
	if( $user_password == $confirm_password ){

		$query = 'INSERT INTO user
		( first_name, last_name, email_address, telephone_no, user_password  )
		VALUES (:first_name, :last_name, :email_address, :telephone_no, :user_password)';

		$db->query( $query, array(
			'first_name' => trim( $first_name ),
			'last_name' => trim( $last_name ),
			'email_address' => trim( $email_address ),
			'telephone_no' => cb_format_telephone_no( intval( $telephone_no ) ),
			'user_password' => hash_password( $user_password )
		) );

		$new_user_id = $db->lastInsertId();

		$_SESSION['signed_in'] = true;
		$_SESSION['user_id'] = $new_user_id;

		header("Location: ../../my-ads.php");

	}else{
		header("Location: ../../register.php?password_unmatch=1");
	}




}


?>
