<?php
session_start();
if (isset($_POST['submit'])) {
    include 'dbh-inc.php';
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    // virhe tarkistus
    //tarkistaa onko kentät tyhjiä
    if (empty($uid) || empty($pwd)) {
        header ("location: ../Index.php?login=error");
        exit();
    } else {
        //tarkistaa onko käyttäjää
        $sql = "SELECT * FROM users WHERE users_uid= '$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header ("location: ../Index.php?login=error");
            exit();
        } else {
            // tarkistaa salasnan
            if ($row = mysqli_fetch_assoc($result)) {
                //de-hash
                $hashPWDCheck = password_verify($pwd, $row['users_pwd']);
                if ($hashPWDCheck == false) {
                    header ("location: ../Index.php?login=error");
                    exit();
                } elseif ($hashPWDCheck == true) {
                    //userlogin tässä
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_etu'] = $row['users_etu'];
                    $_SESSION['u_suku'] = $row['users_suku'];
                    $_SESSION['u_osoite'] = $row['users_osoite'];
                    $_SESSION['u_postinumero'] = $row['users_postinumero'];
                    $_SESSION['u_kaupunki'] = $row['users_kaupunki'];
                    $_SESSION['u_uid'] = $row['users_uid'];
                    header("location: ../Index.php?login=success");
                    exit();
                }
            }
        }
    }
} else {
    header ("location: ../Index.php?login=error");
    exit();
}



?>
/**
 * Created by PhpStorm.
 * User: Lauri
 * Date: 06/10/2018
 * Time: 22.46
 */