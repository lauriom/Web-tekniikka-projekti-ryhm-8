<?php

if (isset($_POST['submit'])) {
    include 'dbh-inc.php';
$etu = mysqli_real_escape_string($conn, $_POST['etu']);
$suku = mysqli_real_escape_string($conn, $_POST['suku']);
$osoite = mysqli_real_escape_string($conn, $_POST['osoite']);
$postinumero =mysqli_real_escape_string($conn, $_POST['postinumero']);
$kaupunki = mysqli_real_escape_string($conn, $_POST['kaupunki']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


        // onko tyhjä?
    if (empty($etu) || empty($suku) || empty($osoite) ||  empty($kaupunki) || empty($uid) || empty($pwd) || empty($postinumero)) {
        header("location: ../Index.php?signup=empty");
        exit();
    } else {
        //onko sallittu sisältö
        if (!preg_match("/^[a-zA-Z]*$/", $etu) || !preg_match("/^[a-zA-Z]*$/", $suku)) {
            header("location: ../Index.php?signup=invalid");
            exit ();
        } else {
            // onko käyttäjä olemassa?
        $sql = "SELECT * FROM users WHERE users_uid ='$uid'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            header("location: ../Index.php?signup=taken");
            exit();
        } else {
            // salaa salasanan
            $hashPWD = password_hash($pwd, PASSWORD_DEFAULT);
                //lisää tietokantaan
            $sql = "INSERT INTO users (users_etu, users_suku, users_osoite, users_postinumero, users_kaupunki, users_uid, users_pwd)
                    VALUES ('$etu', '$suku','$osoite','$postinumero','$kaupunki','$uid','$hashPWD');";
            mysqli_query($conn, $sql);
            header("location: ../Index.php?signup=success");
            exit();
        }
        }
    }
}
else {
    header("location: ../Index.php");
    exit();
}

/**
 * Created by PhpStorm.
 * User: Lauri
 * Date: 04/10/2018
 * Time: 12.42
 */