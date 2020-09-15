<?php

if (isset($_POST['login-submit'])) {
    
    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("Location: ../photos.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;"; //* means "all"
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../photos.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    header("Location: ../photos.php?error=wrongpwd");
                    exit();
                } elseif ($pwdCheck == true) {
                    //this line logs them into the website. CHANGE WHEN I FIGURE OUT HOW TO MAKE A PAGE TO UPLOAD FILES
                    //starts a session
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    
                    header("Location: ../uploadfile.php?login=success");//change this later!
                    exit();

                } else {
                    header("Location: ../photos.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../photos.php?error=nouser");
                exit();
            }
        }
    }

} else {
    header("Location: ../photos.php");
    exit();
}