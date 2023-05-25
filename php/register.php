<?php
    include('connect.php');

    session_start();

    $firstname = "";
    $surname = "";
    $email = "";
    $phone = "";
    $address = "";
    $username = "";
    $password = "";
    $errors = array();

    //Signing Up
    if(isset($_POST['register'])){
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
        $user_check_query = "SELECT * FROM users WHERE user_username='$username' OR user_email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);
  
        if ($user) {
            if ($user['user_username'] === $username) {
                array_push($errors, "Username already exists");
            }

            if ($user['user_email'] === $email) {
                array_push($errors, "email already exists");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password);//encrypt the password before saving in the database
      
            $query = "INSERT INTO users (user_firstname, user_surname, user_email, user_phone,  user_address, user_username, user_password) 
                      VALUES('$firstname', '$surname', '$email', '$phone', '$address', '$username', '$password')";
            mysqli_query($conn, $query);
            $_SESSION['username'] = $username;
        }
    }
?>