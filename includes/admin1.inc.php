<?php
    if(isset($_POST['Submit'])){
        $code = $_POST['code'];
        require_once 'conn.inc.php';
        require_once 'functions.inc.php';
        $id = 1;
        codeExist($conn, $id);
        Authenticator($conn, $code, $id);
    }
    else {
        header("location: ../admin.php");
    }