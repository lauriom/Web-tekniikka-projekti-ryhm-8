<?php
session_start();
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (isset($_SESSION['u_id'])) {

    echo '<div class="wrapper-login">
           <div class="login">
            <form action="http://users.metropolia.fi/~lauriom/3/php/logout-inc.php" method="POST">
            <button type="submit" name="submit">Logout</button>
            </form>             
           </div>
          </div>';
}else { echo '
<div class="wrapper-login">
   <div class="login">
    <form action="http://users.metropolia.fi/~lauriom/3/php/login-inc.php" method="POST">';
    if (strpos($fullUrl, "login=error") == false) { echo '
            <input type="text" name="uid" placeholder="käyttäjätunnus">
            <input type="password" name="pwd" placeholder="salasana">';
    }
    if (strpos($fullUrl, "login=error") == true) {
        echo '<input type="text" name="uid" placeholder="sisäänkirjautuminen">
				 <input type="password" name="pwd" placeholder="epäonnistui">'; }
    echo ' <button type="submit" name="submit">Kirjaudu sisään</button>
		</form>
    </div>
</div>';};
