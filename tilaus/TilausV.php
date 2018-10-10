<link rel="stylesheet" href="../css/main.css">
<link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
<?php
session_start();
if (!isset($_SESSION['tilaus'])) {
echo '<h1>Tilaus Vastaanotettu</h1>
<h2 id="tilausotsikko">Kiitos!</h2>
<div id="kiitos">
  <img src="../kuvat/viherpeukalot.jpg" id="viherpeukalot">
  <br>
  <p class="nimet">Laura Tolvanen</p>
  <p class="nimet"> Tommi Kotilainen</p>
  <p class="nimet">Lauri Marjanen</p>
  <br>
</div>

';
unset($_SESSION['tilaus']);
header ('refresh:8; url=../Index.php');
exit();
} else {
    header ("location: ../index.php");
};
/**
 * Created by PhpStorm.
 * User: Lauri
 * Date: 09/10/2018
 * Time: 11.12
 */
