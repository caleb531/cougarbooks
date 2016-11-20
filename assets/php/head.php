<?php
session_start();
include('assets/php/constants.php');
// Add database and user authentication logic here
include('assets/php/database.php');

// check to see if the user is signed in
// if not take them to the sign in page
if( isset( $_SESSION['signed_in'] ) ){
	echo "Signed in";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" />
<link rel="stylesheet" href="assets/css/main.css" />
