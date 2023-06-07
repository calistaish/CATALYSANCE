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

function emailExists($conn, $email){
    $sql = "SELECT user_id, email, SQ_id, SA FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registeracc.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
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

function emailCheck($conn, $email){
    $emailExist = emailExists($conn, $email);

    session_start();
    $_SESSION['SQ_ID'] = $emailExist['SQ_id'];
    $_SESSION['email'] = $emailExist['email'];
    $SQ_id = $_SESSION['SQ_ID'];

    $sql = "SELECT * FROM SecurityQuestions S, users u WHERE S.id = u.SQ_id AND u.SQ_id = $SQ_id;";
    $resultData = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($resultData)){
        $_SESSION['SQ'] = $row['security_question'];
    }
    header("location: ../forgotpassword2.php");
    exit();
}

function SAAuthenticator($conn, $email, $answer){
    $emailExist = emailExists($conn, $email);
    $SA = $emailExist['SA'];

    if($answer !== $SA){
        header("location: ../forgotpassword2.php?error=your_answer_is_incorrect");
        exit();
    }
    header("location: ../forgotpassword3.php");
    exit();
}

function changePasswordandUsername($conn, $password, $username, $email){
    $sql = "UPDATE users SET userpassword = ?, username = ? WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registeracc.php?error=anerroroccured");
        exit();
    }

    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, 'sss', $hashedpwd, $username, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    session_unset();
    session_destroy();
    header("location: ../passwordresetconfirm.php");
    exit();
}

function changePass($conn, $password, $email){
    $sql = "UPDATE users SET userpassword = ? WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registeracc.php?error=anerroroccured");
        exit();
    }

    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, 'ss', $hashedpwd, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    session_unset();
    session_destroy();
    header("location: ../passwordresetconfirm.php");
    exit();
}

function changeUsername($conn, $username, $email){
    $sql = "UPDATE users SET username = ? WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registeracc.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'ss', $username, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    session_unset();
    session_destroy();
    header("location: ../passwordresetconfirm.php");
    exit();
}

function createUser($conn, $fname, $lname, $email, $phone, $username, $password, $SQ, $SA)
{
    $sql = "INSERT INTO users (firstname, surname, email, phone, username, userpassword, SQ_id, SA) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registeracc.php?error=anerroroccured");
        exit();
    }

    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, 'ssssssis', $fname, $lname, $email, $phone, $username, $hashedpwd, $SQ, $SA);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../acccreation.php");
    exit();
}

function codeExist($conn, $id) {
    $sql = "SELECT * FROM admincode WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registeracc.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'i', $id);
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

function createcode($conn, $code)
{
    $sql = "INSERT INTO admincode (code) VALUES (?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registeracc.php?error=anerroroccured");
        exit();
    }

    $hashedpwd = password_hash($code, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, 's', $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../admin.php");
    exit();
}

function Authenticator($conn, $code, $id){
    $codeexist = codeExist($conn, $id);

    $pwdhashed = $codeexist['code'];
    $checkPwd = password_verify($code, $pwdhashed);

    if ($checkPwd === false) {
        header("location: ../admin.php?error=incorrectpassword");
        exit();
    }
    else if ($checkPwd === true) {
        header("location: ../admin2.php");
        exit();
    }
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

        $id = $_SESSION['id'];
        $addressExist = checkAddressifset($conn, $id);
        $_SESSION['addressid'] = $addressExist['addressid'];
        $_SESSION['address'] = $addressExist['address'];
        $_SESSION['zipcode'] = $addressExist['zipcode'];
        $_SESSION['city'] = $addressExist['city'];
        $_SESSION['region'] = $addressExist['region'];
        $_SESSION['country'] = $addressExist['country'];

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

    unset($_SESSION['firstname']);
    unset($_SESSION['surname']);
    unset($_SESSION['email']);
    unset($_SESSION['phone']);
    unset($_SESSION['gender']);
    unset($_SESSION['birthday']);
    session_regenerate_id();
    $_SESSION['firstname'] = $fname;
    $_SESSION['surname'] = $lname;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['gender'] = $gender;
    $_SESSION['birthday'] = $birthday;
    session_write_close();


    header("location: ../account.php");
    exit();
}

function checkAddressifset($conn, $userid) {
    $sql = "SELECT * FROM address a, users u WHERE a.user_id = u.user_id AND u.user_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../manage-address.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $userid);
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

function editAddress($conn, $country, $region, $city, $zipcode, $address, $addressid){
    $sql = "UPDATE address SET country = ?, region = ?, city = ?, zipcode = ?, address = ? WHERE user_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../manage-address.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'sssssi', $country, $region, $city, $zipcode, $address, $addressid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    $addressExist = checkAddressifset($conn, $id);
    unset($_SESSION['country']);
    unset($_SESSION['region']);
    unset($_SESSION['city']);
    unset($_SESSION['zipcode']);
    unset($_SESSION['address']);
    session_regenerate_id();
    $_SESSION['address'] = $addressExist['address'];
    $_SESSION['zipcode'] = $addressExist['zipcode'];
    $_SESSION['city'] = $addressExist['city'];
    $_SESSION['region'] = $addressExist['region'];
    $_SESSION['country'] = $addressExist['country'];
    session_write_close();
    header("location: ../account.php");
    exit();
}

function addAddress($conn, $userid, $country, $region, $city, $zipcode, $address){
    $sql = "INSERT INTO address (user_id, country, region, city, zipcode, address) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../manage-address.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'isssss', $userid, $country, $region, $city, $zipcode, $address);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    $addressExist = checkAddressifset($conn, $id);
    unset($_SESSION['country']);
    unset($_SESSION['region']);
    unset($_SESSION['city']);
    unset($_SESSION['zipcode']);
    unset($_SESSION['address']);
    session_regenerate_id();
    $_SESSION['address'] = $addressExist['address'];
    $_SESSION['zipcode'] = $addressExist['zipcode'];
    $_SESSION['city'] = $addressExist['city'];
    $_SESSION['region'] = $addressExist['region'];
    $_SESSION['country'] = $addressExist['country'];
    session_write_close();
    header("location: ../account.php");
    exit();
}

function addCheckout($conn, $fname, $lname, $cname, $country, $address, $city, $zipcode, $phone, $email, $mop, $userid){
    $sql = "INSERT INTO checkoutinfo (firstname, surname, companyname, country, address, city, zipcode, phone, email, modeofpayment, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../manage-address.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'ssssssisssi', $fname, $lname, $cname, $country, $address, $city, $zipcode, $phone, $email, $mop, $userid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../ordercomp.php");
    exit();
}

function editQuantity($conn, $quantity, $id){
    $sql = "UPDATE cart_items SET quantity = ? WHERE item_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../cart.php?error=anerroroccured");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'ii', $quantity, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../cart.php");
    exit();
}