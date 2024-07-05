<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emptyInputLogin($email, $pwd) !== false) {
        header("Location: login.php?error=emptyInput");
        exit();
    }

    logindriver($conn, $email, $pwd);

}
else {
    header('Location:../login.php');
    exit();
}