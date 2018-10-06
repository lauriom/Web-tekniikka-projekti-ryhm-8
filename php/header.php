<?php
session_start();
if (isset($_SESSION['u_id'])) {

    echo '<div class="wrapper-login">
           <div class="login">
            <form action="http://localhost:63342/!Kurssiproj/php/logout-inc.php" method="POST">
            <button type="submit" name="submit">Logout</button>
            </form>
           </div>
          </div>';
}else { echo '
<div class="wrapper-login">
    <div class="login">
        <!-- MUUTA OSOITERRA SERVERILLÄ!!!!!!!!!!!! -->
        <form action="http://localhost:63342/!Kurssiproj/php/login-inc.php" method="POST">
            <input type="text" name="uid" placeholder="käyttäjätunnus">
            <input type="password" name="pwd" placeholder="salasana">
            <button type="submit" name="submit">Kirjaudu sisään</button>
        </form>
    </div>
</div>';}
?>