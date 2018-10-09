<?php
session_start();
if (isset($_SESSION['tilaus'])) {
echo '<h1>Tilaus Vastaanotettu</h1>
<br>
<h2>Kiitos!</h2>
<img src="../kuvat/viherpeukalot.jpg">
<p>Laura Tolvanen</p>
<br>
<p> Tommi Kotilainen</p>
<br>
<p>Lauri Marjanen</p>
<a href="../index.php">Palaa Etusivulle</a>
';
unset($_SESSION['tilaus']);

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