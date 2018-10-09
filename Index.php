<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
    <title>Kukkakauppa</title>
</head>

<body>
<?php include 'php/header.php'; ?>
<div id="container" >
    <div id= "content">
        <div id="contentLeft">
            <!-- storefront on ensimmäinen kuva joka näkyy, kuin valikosta muutetaan menua niin contentleft muuttuu-->
                <div id="storefront" class="valilehti">
                    <img  id ="imgsf" src="kuvat/placeholderstorefront.jpg">
                </div>
                <div id="sf1" class = valilehti>
                    <!--palvelut-->
                    <h2>Yksittäiset kukat</h2>
                    <p>Tuoreena leikattu, näyttävä kukkayksilö, jonka vastaanottaminen
                    piristää varmasti kenen tahansa päivää. Valitse katalogista kukkalajike,
                    jonka upean yksilön haluaisit itsellesi tai vaikkapa antaa yllätyslahjaksi.</p>
                    <h2>Kimput</h2>
                    <p>Käsintehty, huolella aseteltu kukkakimppu, josta vastaanottaja varmasti ilahtuu.
                        Valitse vain katalogista kukat, jotka haluat kauniiseen kimppuusi.</p>
                    <h2>Kuljetus</h2>
                    <p>Nopea ja kätevä tapa saada kukat lyhyelläkin varoitusajalla kotiovelle tai tilaisuuteen.</p>
                </div>
                <div id="kukat" class = valilehti>
                    <!--kukkien kuvat-->
                    <div class ="imgrow">
                        <img src="kuvat/kuva1.jpg" class = pieni id="kuva1">
                        <img src="kuvat/kuva2.jpg" class = pieni id="kuva2">
                        <img src="kuvat/kuva3.jpg" class = pieni id="kuva3">
                    </div>
                    <div class ="imgrow">
                        <img src="kuvat/kuva4.jpg" class = pieni id="kuva4">
                        <img src="kuvat/kuva5.jpg" class = pieni id="kuva5">
                        <img src="kuvat/kuva6.jpg" class = pieni id="kuva6">
                    </div>
                </div>
                <div id="kimput" class = valilehti>
                    <!-- "kimppujen kuvat"-->
                    <div class ="imgrow">
                        <img src="kuvat/kuva7.jpg" class = pieni id="kuva7">
                        <img src="kuvat/kuva8.jpg" class = pieni id="kuva8">
                        <img src="kuvat/kuva9.jpg" class = pieni id="kuva9">
                    </div>
                    <div class ="imgrow">
                        <img src="kuvat/kuva10.jpg" class = pieni id="kuva10">
                        <img src="kuvat/kuva11.jpg" class = pieni id="kuva11">
                        <img src="kuvat/kuva12.jpg" class = pieni id="kuva12">
                        </div>
                </div>
                <div id="tiedot" class = valilehti>
                    <div id="kartta">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d248.1333205034142!2d24.9311221!3d60.1630769!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x46920bb57a615667%3A0xb5ff37ee59c94f19!2sBulevardi+31%2C+00180+Helsinki!3m2!1d60.1631043!2d24.9312589!5e0!3m2!1sen!2sfi!4v1538836065334"></iframe>
                    </div>
                    <!--yhteystiedot-->
                    <div id="yhttiedot">
                    <h3>KukkaKauppa</h3>
                    <p>Kukkakaupantie 12</p>
                    <p>010101 Vantaa</p>
                    <h3>Yhteystiedot</h3>
                    <p>puh: +358 123123</p>
                    <P>sposti: kukka@kauppa.fi</P>
                    </div>
                </div>
            <?php include 'php/singup.php'; ?>

        </div>

        <div id="contentRight">
            <div id ="otsikko1">
                <h1>Kukkakauppa Latola</h1>
                <!--otsikkoboxi valikon päällä-->
            </div>
            <div id="mainmenu">
                <!-- vasemalla puolella oleva valikko-->
                <!-- list-tagien sisälle <a>-tagi animaatiota varten tulevaisuudessa?-->
                <ul id="valikko">
                    <li>Etusivu</li>
                    <li>Palvelut</li>
                    <li>Kukat</li>
                    <li>Kukkakimput</li>
                    <li>Yhteystiedot</li>
                   <?php
                   if (!isset($_SESSION['u_id'])){
                       echo '<li>Luo tili</li>';
                   } else {
                       echo '<li>Tilaa kukkia</li>';
                   }?>
                </ul>
            </div>
        </div>
    </div>
</div>
    <!--lomake kirjautumiselle-->


    <script type="text/javascript" src="js/script.js"></script>
</body>
