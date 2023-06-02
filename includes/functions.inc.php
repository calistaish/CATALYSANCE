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
    mysqli_stmt_close($stmt);
    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
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
        $_SESSION['id'] = $usernameexist['user_id'];
        $_SESSION['firstname'] = $usernameexist['firstname'];
        $_SESSION['surname'] = $usernameexist['surname'];
        $_SESSION['email'] = $usernameexist['email'];
        $_SESSION['phone'] = $usernameexist['phone'];
        $_SESSION['gender'] = $usernameexist['gender'];
        $_SESSION['birthday'] = $usernameexist['birthdate'];
        header("location: ../homepage - final.php");
        exit();
    }
}

function editUser($conn, $fname, $lname, $email, $phone, $gender, $birthday, $id){
    $sql = "UPDATE users SET firstname = ?, surname = ?, email = ?, phone = ?, gender = ?, birthdate = ? WHERE user_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../profile-info.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'ssssssi', $fname, $lname, $email, $phone, $gender, $birthday, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../account.php");
    exit();
}

function checkAddressifset($conn, $userid, $addresstype) {
    $sql = "SELECT * FROM address a, users u, address_type t WHERE a.user_id = u.user_id AND a.address_type_id = t.address_type_id AND u.user_id = ? and t.address_type_id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../manage-address.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ii", $userid, $addresstype);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        session_start();
        $_SESSION['address'] = $row['address'];
        $_SESSION['zipcode'] = $row['zipcode'];
        $_SESSION['city'] = $row['city'];
        $_SESSION['region'] = $row['region'];
        $_SESSION['country'] = $row['country'];
        $_SESSION['addressid'] = $row['address_id'];
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function editAddress($conn, $country, $region, $city, $zipcode, $address, $addressid){
    $sql = "UPDATE address SET country = ?, region = ?, city = ?, zipcode = ?, address = ? WHERE address_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../manage-address.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'sssssi', $country, $region, $city, $zipcode, $address, $addressid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../manage-address.php");
    exit();
}

function addAddress($conn, $addresstype, $userid, $country, $region, $city, $zipcode, $address){
    $sql = "INSERT INTO address (address_type_id, user_id, country, region, city, zipcode, address) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../manage-address.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'iisssss', $addresstype, $userid, $country, $region, $city, $zipcode, $address);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../manage-address.php");
    exit();
}