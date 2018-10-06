<?php
if (isset($_POST['submit'])) {
include_once 'dbh.inc.php';
$etu = mysqli_real_escape_string($conn, $_POST['etu']);
$suku = mysqli_real_escape_string($conn, $_POST['suku']);
$osoite = mysqli_real_escape_string($conn, $_POST['osoite']);
$kaupunki = mysqli_real_escape_string($conn, $_POST['kaupunki']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        // onko tyhjä?
    if (empty($etu) || empty($suku) || empty($osoite) ||  empty($kaupunki) || empty($uid) || empty($pwd)) {
        echo "<script type='text/javscript'>alert('empty field');</script>";
        exit();
    } else {
        //onko sallittu sisältö
        if (!preg_match("/^[a-zA-Z]*$/", $etu) || !preg_match("/^[a-zA-Z]*$/", $suku)) {
            echo "<script type='text/javscript'>alert('invalid characters');</script>";
            exit ();
        } else {
            // onko käyttäjä olemassa?
        $sql = "SELECT FROM users WHERE user_uid ='$uid'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            echo "<script type='text/javscript'>alert('user taken');</script>";
            exit();
        } else {
            // salaa salasanan
            $hashPWD = password_hash($pwd, PASSWORD_DEFAULT);
                //lisää tietokantaan
            $sql = "INSERT INTO users (users_etu, user_suku, user_osoite, user_kaupunki, user_uid, user_pwd)
                    VALUES ('$etu', '$suku', '$osoite','$kaupunki','$uid','$hashPWD');";
            mysqli_query($conn, $sql);
            exit();
        }
        }
    }
}

/**
 * Created by PhpStorm.
 * User: Lauri
 * Date: 04/10/2018
 * Time: 12.42
 */