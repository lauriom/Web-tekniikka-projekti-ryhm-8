<?php
if (isset($_POST['submit'])) {
    session_start();
    session_unset();
    session_destroy();
    header ("location: ../Index.php");
    exit();
};
?>
/**
 * Created by PhpStorm.
 * User: Lauri
 * Date: 07/10/2018
 * Time: 0.52
 */