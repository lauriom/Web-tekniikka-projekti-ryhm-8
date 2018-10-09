<?php
if (isset($_POST['tilaa'])) {
    session_start();
    include '../php/dbh-inc.php'; // hakee tietokannat
    include  'hinnat-inc.php'; // hakee kukkien hinnat
    $userid = ($_SESSION['u_id']);
    $Yhthinta = 0;
    $YhtHinta1 = 0;
    $YhtHinta2 = 0;
    $YhtHinta3 = 0;
    $YhtHinta4 = 0;
    $YhtHinta5 = 0;
    $YhtHinta6 = 0;
    $kukkam1 = mysqli_real_escape_string($conn, $_POST['quantity1']);
    $kukkam2 = mysqli_real_escape_string($conn, $_POST['quantity2']);
    $kukkam3 = mysqli_real_escape_string($conn, $_POST['quantity3']);
    $kukkam4 = mysqli_real_escape_string($conn, $_POST['quantity4']);
    $kukkam5 = mysqli_real_escape_string($conn, $_POST['quantity5']);
    $kukkam6 = mysqli_real_escape_string($conn, $_POST['quantity6']);
    if (!empty($kukkam1)) {
    $YhtHinta1 = $kukkam1 * $hin1;
        $sql1 = "INSERT INTO tilaukset (user_id, kukat_id ,tilaus_maara, tilaus_yht, date)
                values ('$userid','1','$kukkam1','$YhtHinta1', NOW());";
        mysqli_query($conn, $sql1);
    }
    if (!empty($kukkam2)) {
    $YhtHinta2 = $kukkam2 * $hin2;
        $sql1 = "INSERT INTO tilaukset (user_id, kukat_id ,tilaus_maara, tilaus_yht, date)
                   values ('$userid','2','$kukkam2','$YhtHinta2', NOW());";
        mysqli_query($conn, $sql1);
    }
    if (!empty($kukkam3)) {
    $YhtHinta3 = $kukkam3 * $hin3;
    $sql1 = "INSERT INTO tilaukset (user_id, kukat_id ,tilaus_maara, tilaus_yht, date)
              values ('$userid','3','$kukkam3','$YhtHinta3', NOW());";
    mysqli_query($conn, $sql1);
    }
    if (!empty($kukkam4)) {
    $YhtHinta4 = $kukkam4 * $hin4;
    $sql1 = "INSERT INTO tilaukset (user_id, kukat_id ,tilaus_maara, tilaus_yht, date)
              values ('$userid','4','$kukkam4','$YhtHinta4', NOW());";
    mysqli_query($conn, $sql1);
    }
    if (!empty($kukkam5)) {
    $YhtHinta5 = $kukkam5 * $hin5;
    $sql1 = "INSERT INTO tilaukset (user_id, kukat_id ,tilaus_maara, tilaus_yht, date)
              values ('$userid','5','$kukkam5','$YhtHinta5', NOW());";
    mysqli_query($conn, $sql1);
    }
    if (!empty($kukkam6)) {
    $YhtHinta6 = $kukkam6 * $hin6;
    $sql1 = "INSERT INTO tilaukset (user_id, kukat_id ,tilaus_maara, tilaus_yht, date)
              values ('$userid','6','$kukkam6','$YhtHinta6', NOW());";
    mysqli_query($conn, $sql1);
    }
    echo 'Tilaus vastaanotettu <br> selain vie teidät takaisin kotisivulle hetken päästä';
    header ("location: ../TilausV.php?TilausVastaanotettu");
    exit();
}
 else {
    header ("location: ../index.php");
};
/**
 * Created by PhpStorm.
 * User: Lauri
 * Date: 08/10/2018
 * Time: 10.50
 */