<?php

    if( isset($_POST["reset-request-submit"])){

        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);

        $url = "www.localhost.com/php-login-register-system/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

        $expres = date("U") + 1800;

        require 'dbh.inc.php';

        $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "There was an error!";
            exit();
        }else {
            mysqli_stmt_bind_param($stmt, "s", $userEmail);
            mysqli_stmt_execute($stmt);
        }

        $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "There was an error!";
            exit();
        }else {
            $hashedToken = password_hash($token, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssss", $userEmail,$selector,$hashedToken,$expres);
            mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        $to = $userEmail;
        $subject = 'Reset your password for zedend';

        $message = '<p>We received your password reset request</p>';
        $message .= '<p>Here is your password reset link: </br>';
        $message .= '<a href="' . $url . '">' . $url . '</a></p>';

        $headers = "From: ZedEnd <zahid3d9@gmailcom>\r\n";
        $headers .= "Reply-To: zahid3d9@gmail.com\r\n";
        $headers .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        header("Location: ../reset-password.php?reset=success");

    } else {
        header("Location: ../index.php");
    }