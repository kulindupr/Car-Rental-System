<?php

//Empty inputs checking
function emptyInputSignup1($name, $NIC, $email, $Phonenumber, $DOB, $pwd, $pwdrepeat) {
    $result;
    if (empty($name) || empty($NIC) || empty($email) || empty($Phonenumber) || empty($DOB) || empty($pwd) || empty($pwdrepeat) ) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//invalid usename checking
function invalidUid($username)
{
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//invalid email checking
function invalidEmail($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//password and conferimed password cheking
function pwdMatch($pwd, $pwdrepeat)
{
    $result;
    if ($pwd !== $pwdrepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;

}
//user existence
function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM registereduser WHERE uname = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../registeras.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}
//driver existencs
function didExists($conn, $username, $email)
{
    $sql = "SELECT * FROM registereddriver WHERE dname = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../signupas.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

//create user
function createUser($conn, $name, $NIC, $email, $Phonenumber, $DOB, $pwd) {
    $sql = "INSERT INTO registereduser (uname, NIC, email, Phonenumber, DOB, upassword) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../registeras.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssss", $name, $NIC, $email, $Phonenumber, $DOB, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../loginu.php?error=none");
    exit();
}

//create driver
function createdriver($conn, $name, $NIC, $email, $Phonenumber, $DOB, $pwd) {
    $sql = "INSERT INTO registereddriver (dname, NIC, email, Phonenumber, DOB, dpassword) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../registeras.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssss", $name, $NIC, $email, $Phonenumber, $DOB, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../logind.php?error=none");
    exit();
}

function emptyInputLogin($email, $pwd) {
    $result;
    if (empty($email) || empty($pwd) ) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function loginUsers($conn, $email, $pwd) {
    $uidExists = uidExists($conn, $email, $email);
    if ($uidExists === false) {
        header("Location:../loginu.php?error=wrongloging");
        exit();
    }
    $pwdHashed = $uidExists["upassword"];
    $checkpwd = password_verify($pwd, $pwdHashed);

    if ($checkpwd === false) {
        header("Location:../loginu.php?error=wrongpwd");
        exit();
    } else if ($checkpwd === true) {
        session_start();
        $_SESSION["uid"] = $uidExists["id"];
        $_SESSION["uuname"] = $uidExists["uname"];
        $_SESSION["uNIC"] = $uidExists["NIC"];
        $_SESSION["uemail"] = $uidExists["email"];
        $_SESSION["uPhonenumber"] = $uidExists["Phonenumber"];
        $_SESSION["uDOB"] = $uidExists["DOB"];
        $_SESSION["role"] = "user";

        header("Location: ../index.php");
        exit();
    }
}

function logindriver($conn, $email, $pwd) {
    $didExists = didExists($conn, $email, $email);
    if ($didExists === false) {
        header("Location:../logind.php?error=wrongloging");
        exit();
    }
    $pwdHashed = $didExists["dpassword"];
    $checkpwd = password_verify($pwd, $pwdHashed);

    if ($checkpwd === false) {
        header("Location:../logind.php?error=wrongpwd");
        exit();
    } else if ($checkpwd === true) {
        session_start();
        $_SESSION["uid"] = $didExists["id"];
        $_SESSION["uuname"] = $didExists["dname"];
        $_SESSION["uNIC"] = $didExists["NIC"];
        $_SESSION["uemail"] = $didExists["email"];
        $_SESSION["uPhonenumber"] = $didExists["Phonenumber"];
        $_SESSION["uDOB"] = $didExists["DOB"];
        $_SESSION["role"] = "driver";
        header("Location: ../index.php");
        exit();
    }
}

function updateUser($conn, $userID, $name, $NIC, $email, $phoneNumber, $DOB, $pwd) {
    $sql = "UPDATE registereduser SET uname = ?, NIC = ?, email = ?, Phonenumber = ?, DOB = ?, upassword = ? WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../index.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssssi", $name, $NIC, $email, $phoneNumber, $DOB, $hashedPwd, $userID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_destroy();
    session_start();
        $_SESSION["uid"] = $userID;
        $_SESSION["uuname"] = $name;
        $_SESSION["uNIC"] = $NIC;
        $_SESSION["uemail"] = $email;
        $_SESSION["uPhonenumber"] = $phoneNumber;
        $_SESSION["uDOB"] = $DOB;
        $_SESSION["role"] = "user";
    header("Location:../index.php?error=none");
    exit();
}

function updateDriver($conn, $userID, $name, $NIC, $email, $phoneNumber, $DOB, $pwd) {
    $sql = "UPDATE registereddriver SET dname = ?, NIC = ?, email = ?, Phonenumber = ?, DOB = ?, dpassword = ? WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../index.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssssi", $name, $NIC, $email, $phoneNumber, $DOB, $hashedPwd, $userID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_destroy();
    session_start();
        $_SESSION["uid"] = $userID;
        $_SESSION["uuname"] = $name;
        $_SESSION["uNIC"] = $NIC;
        $_SESSION["uemail"] = $email;
        $_SESSION["uPhonenumber"] = $phoneNumber;
        $_SESSION["uDOB"] = $DOB;
        $_SESSION["role"] = "driver";
    header("Location:../index.php?error=none");
    exit();
}

function loadUser($conn, $userID) {
    $sql = "SELECT * FROM registereduser WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return null;
    }
    mysqli_stmt_bind_param($stmt, "i", $userID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        mysqli_stmt_close($stmt);
        return $row;
    } else {
        mysqli_stmt_close($stmt);
        return null;
    }
}

function loadDriver($conn, $userID) {
    $sql = "SELECT * FROM registereddriver WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return null;
    }
    mysqli_stmt_bind_param($stmt, "i", $userID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        mysqli_stmt_close($stmt);
        return $row;
    } else {
        mysqli_stmt_close($stmt);
        return null;
    }
}

function deleteUser($conn, $userID) {
    if($_SESSION["role"] == "driver"){
        $sql = "DELETE FROM registereddriver WHERE id = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return false;
        }
        mysqli_stmt_bind_param($stmt, "i", $userID);
        mysqli_stmt_execute($stmt);
        $affectedRows = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        session_destroy();
        header("Location:../logind.php");
    }

    if($_SESSION["role"] == "user"){
        $sql = "DELETE FROM registereduser WHERE id = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return false;
        }
        mysqli_stmt_bind_param($stmt, "i", $userID);
        mysqli_stmt_execute($stmt);
        $affectedRows = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        session_destroy();
        header("Location:../loginu.php");
    }

}

