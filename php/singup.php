<?php if (isset($_SESSION['u_id'])){
    include 'tilaus/tilaus.php';
    ;} else { echo '<section>
    <div class="valilehti" id="lomake">
        <img src="kuvat/japflower.png" id="flower">
        <form class="singup" action="http://users.metropolia.fi/~lauriom/3/php/singup-inc.php" method="POST">
            <p><strong>Luo Tili</strong></p>
            <input type="text" name="etu" placeholder="etunimi">
            <input type="text" name="suku" placeholder="sukunimi">
            <input type="text" name="osoite" placeholder="osoite">
            <input type="text" name="postinumero" placeholder="postinumero">
            <input type="text" name="kaupunki" placeholder="kaupunki">
            <input type="text" name="uid" placeholder="käyttäjätunnus">
            <input type="password" name="pwd" placeholder="salasana">
			<br>
            <button type="submit" name="submit">luo tili</button>
			';
			
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";		
if (strpos($fullUrl, "signup=empty") == true) {
    echo "<p class='error'>Jokin kenttä on tyhjä<p>";
};
if (strpos($fullUrl, "signup=invalid") == true) {
    echo "<p class='error'>Nimi/Sukunimi kentissä on vääriä kirjaimia<p>";
};
if (strpos($fullUrl, "signup=taken") == true) {
    echo "<p class='error'>Käyttäjätunnus on varattu<p>";
};



echo	'
</form>
    </div>
	</section>';};