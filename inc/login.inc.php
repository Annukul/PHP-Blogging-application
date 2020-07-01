<?php 

if (isset($_POST['l_submitt'])) {
    require "db2.php";

    $uem = $_POST['us_em'];
    $up = $_POST['user_pwd'];

    if (empty($uem) || empty($up)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM authJoin WHERE authName=? OR authEmail=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $uem, $uem);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($up, $row['authPwd']);
                if ($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['authid'];
                    $_SESSION['userUid'] = $row['authName'];
                    $_SESSION['name'] = htmlentities($_POST['us_em']);
                    header("Location: ../main.php?login=sucess");
                    exit();
                } else {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("Location: ../index.php?error=nouserfound");
                 exit();
            }
        }
    }         
} else {
    header("Location: ../index.php");
    exit();
}