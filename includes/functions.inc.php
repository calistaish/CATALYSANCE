<?php 
function usernameExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registeracc.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $fname, $lname, $email, $phone, $username, $password)
{
    $sql = "INSERT INTO users VALUES (null, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registeracc.php?error=anerroroccured");
        exit();
    }

    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, 'ssssss', $fname, $lname, $email, $phone, $username, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../acccreation.php");
    exit();
}

function loginUser($conn, $username, $password){
    $usernameexist = usernameExists($conn, $username, $username);

    if($usernameexist === false){
        header("location: ../userlogin.php?error=username does not exist");
        exit();
    }

    $pwdhashed = $usernameexist['userpassword'];
    $checkPwd = password_verify($password, $pwdhashed);

    if ($checkPwd === false) {
        header("location: ../userlogin.php?error=incorrectpassword");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION['id'] = $usernameexist['id'];
        $_SESSION['firstname'] = $usernameexist['firstname'];
        $_SESSION['surname'] = $usernameexist['surname'];
        $_SESSION['email'] = $usernameexist['email'];
        $_SESSION['phone'] = $usernameexist['phone'];

        header("location: ../homepage - final.php");
        exit();
    }
}