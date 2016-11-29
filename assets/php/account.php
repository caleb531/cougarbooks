<?php

session_start();
include('database.php');
include('redirection.php');

  $first = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
  $last= filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
  $phone= filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
  $pass_word= filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
  $hash_password = $db->hash_password($pass_word,$email);
  $update_query='UPDATE user SET first_name=:first_name, last_name=:last_name, email_address=:email_address, telephone_no=:phone_no, user_password=:hashed_password WHERE user_id = :user_id';
  $db->query($update_query, array(':first_name' => $first,':last_name' => $last,':email_address' => $email,':phone_no' => $phone,':hashed_password' => $hash_password, 'user_id' => $_SESSION['user_id']));
  cb_redirect('../../account.php');
?>
