<?php
session_start();

$username = "";
$email    = "";
$firstname = "";
$surname = "";
$address = "";
$phone = "";
$password = "";
$errors = array(); 

$conn = mysqli_connect('localhost', 'root', '', 'WearYourMoods');
//SIGNING UP
if (isset($_POST['Register'])) {

    $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
    $surname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['cont']);
    $address = mysqli_real_escape_string($conn, $_POST['add']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $conpassword = mysqli_real_escape_string($conn, $_POST['conpassword']);

  if ($password != $conpassword) {
	array_push($errors, "The two passwords do not match");
  }
 
  /*$user_check_query = "SELECT * FROM users WHERE user_email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }*/
  }

  if (count($errors) == 0) {
  	$encrypt_password = md5($password);

  	$query = "INSERT INTO users (user_firstname, user_surname, user_email, user_phone, user_address) 
  			  VALUES('$firstname', '$surname', '$email', '$phone', '$address')";
  	mysqli_query($conn, $query);
    $query1 = "INSERT INTO accounts (account_username, account_password) 
               VALUES('$username', '$encrypt_password')";
    mysqli_query($conn, $query1);
  	$_SESSION['username'] = $username;
  }

//LOGING IN
  if (isset($_POST['Login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    $password = md5($password);
    $query = "SELECT * FROM accounts WHERE account_username='$username' AND account_password='$password'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
    }else {
        array_push($errors, "Wrong username/password combination");
      }
    }
  
  ?>