<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $NIC = $_POST["NIC"];
    $email = $_POST["email"];
    $Phonenumber = $_POST["Phonenumber"];
    $DOB = $_POST["DOB"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    $emptyInputs1 = emptyInputSignup1($name, $NIC, $email, $Phonenumber, $DOB, $pwd, $pwdrepeat);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($email);
    $pwdMatch = pwdMatch($pwd, $pwdrepeat);
    $uidExists = uidExists($conn, $username, $email);

    if ($emptyInputs1 !== false) {
        header("Location: ../signup.php?error=emptyInput");
        exit();
    }
    if ($invalidUid !== false) {
        header("Location: ../signup.php?error=invaliduid");
        exit();
    }
    if ($invalidEmail !== false) {
        header("Location: ../signup.php?error=invalidemail");
        exit();
    }
    if ($pwdMatch !== false) {
        header("Location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if ($uidExists !== false) {
        header("Location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $NIC, $email, $Phonenumber, $DOB, $pwd);


}
else {
    header('Location:../signup.php');
    exit();
}