<?php
    require_once "connect.php";

    if(isset($POST['Register'])){
        $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
        $surname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['cont']);
        $address = mysqli_real_escape_string($conn, $_POST['add']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        mysqli_query($conn, "INSERT INTO Users (user_firstname, user_surname, user_email, user_phone, user_address)
VALUES ($firstname, $surname, $email, $phone, $address)");

        //$conn->query($sql);
        
        mysqli_query($conn, "INSERT INTO Accounts (account_username, account_password)
VALUES ($username, $password)");

//$conn->query($sql);
    }
       
?>