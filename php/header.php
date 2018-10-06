<?php
session_start();
?>

<div class="wrapper-login">
    <div class="login">
        <!-- MUUTA OSOITERRA SERVERILLÄ!!!!!!!!!!!! -->
        <form action="http://localhost:63342/!Kurssiproj/php/login-inc.php" method="POST">
            <input type="text" name="uid" placeholder="käyttäjätunnus">
            <input type="password" name="pwd" placeholder="salasana">
            <button type="submit" name="submit">Kirjaudu sisään</button>
        </form>
    </div>
</div>