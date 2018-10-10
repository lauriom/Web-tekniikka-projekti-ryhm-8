<?php if (isset($_SESSION['u_id'])){
include 'tilaus/tilaus.php';
;} else echo '<section>
    <div class="valilehti" id="lomake">
        <img src="kuvat/japflower.png" id="flower" alt="Kukka?">
        <form class="singup" action="http://localhost:63342/!Kurssiproj/php/singup-inc.php" method="POST">
            <!--MUUTA OSOITETTA SERVERILLÄ!!!!!!!!-->
            <p><strong>Luo tili</strong></p>
            <input type="text" name="etu" placeholder="etunimi">
            <input type="text" name="suku" placeholder="sukunimi">
            <input type="text" name="osoite" placeholder="osoite">
            <input type="text" name="postinumero" placeholder="postinumero">
            <input type="text" name="kaupunki" placeholder="kaupunki">
            <input type="text" name="uid" placeholder="käyttäjätunnus">
            <input type="password" name="pwd" placeholder="salasana">
            <br>
            <button type="submit" name="submit">luo tili</button>
        </form>
    </div>
</section>';
