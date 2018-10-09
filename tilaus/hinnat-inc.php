<?php
// hakee hinnat tietokannasta
include '../php/dbh-inc.php';
$hinta1 = "SELECT kukat_hinta FROM kukat WHERE kukat_id='1'" ;
$hinta2 = "SELECT kukat_hinta FROM kukat WHERE kukat_id='2'" ;
$hinta3 = "SELECT kukat_hinta FROM kukat WHERE kukat_id='3'" ;
$hinta4 = "SELECT kukat_hinta FROM kukat WHERE kukat_id='4'" ;
$hinta5 = "SELECT kukat_hinta FROM kukat WHERE kukat_id='5'" ;
$hinta6 = "SELECT kukat_hinta FROM kukat WHERE kukat_id='6'" ;
$hr1 = mysqli_query($conn, $hinta1);
$hr2 = mysqli_query($conn, $hinta2);
$hr3 = mysqli_query($conn, $hinta3);
$hr4 = mysqli_query($conn, $hinta4);
$hr5 = mysqli_query($conn, $hinta5);
$hr6 = mysqli_query($conn, $hinta6);
$row1 = $hr1->fetch_row();
$row2 = $hr2->fetch_row();
$row3 = $hr3->fetch_row();
$row4 = $hr4->fetch_row();
$row5 = $hr5->fetch_row();
$row6 = $hr6->fetch_row();
$hin1 = (string)$row1[0];
$hin2 = (string)$row2[0];
$hin3 = (string)$row3[0];
$hin4 = (string)$row4[0];
$hin5 = (string)$row5[0];
$hin6 = (string)$row6[0];
/**
 * Created by PhpStorm.
 * User: Lauri
 * Date: 08/10/2018
 * Time: 17.48
 */