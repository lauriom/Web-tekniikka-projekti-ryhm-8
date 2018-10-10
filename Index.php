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

<div class="ylavalikko">
    <div class="dropdown">
        <button class="valikkonappi">Menu</button>
        <div class="dropsisalto">
            <p id="valikko1">Etusivu</p>
            <p id="valikko2">Palvelut</p>
            <p id="valikko3">Historia</p>
            <p id="valikko4">Galleria</p>
            <p id="valikko5">Yhteystiedot</p>
              <?php
                   if (!isset($_SESSION['u_id'])){
                       echo '<p id="valikko6">Luo tili</p>';
                   } else {
                       echo '<p id="valikko6">Kauppa</p>';
                   }?>
        </div>
    </div>
</div>

<div id="container" >
    <div id= "content">
        <div id="contentLeft">
            <!-- Storefront on ensimmäinen sivu joka näkyy. Valikosta klikattaessa contentleft muuttuu-->
            <div id="storefront" class="valilehti">
              <video class="video" id="media-video" width="650" height="475" controls>
                <source src="kukkakauppavideo.mp4" type="video/mp4"
              </video>
            </div>
                <div id="sf1" class = valilehti>
                    <!--palvelut-->
                    <h2>Yksittäiset kukat</h2>
                    <p>Tuoreena leikattu, näyttävä kukkayksilö, jonka vastaanottaminen
                    piristää varmasti kenen tahansa päivää. Valitse <a href="#" onclick="naytaKauppataiTili()">katalogista</a> kukkalajike,
                    jonka upean yksilön haluaisit itsellesi tai vaikkapa antaa yllätyslahjaksi.</p>
                    <h2>Kimput</h2>
                    <p>Käsintehty, huolella aseteltu kukkakimppu, josta vastaanottaja varmasti ilahtuu.
                        Valitse vain <a href="#" onclick="naytaKauppataiTili()">katalogista</a> kukat, jotka haluat kauniiseen kimppuusi.</p>
                    <h2>Kuljetus</h2>
                    <p>Nopea ja kätevä tapa saada kukat lyhyelläkin varoitusajalla kotiovelle tai tilaisuuteen.</p>
                    <h2>Tilaukset</h2>
                    <p>Kukkia voi tilata verkkokaupastamme. Kaupan käyttö vaatii <a href="#" onclick="naytaKauppataiTili()">asiakastilin luonnin
                    ja sisäänkirjautumisen.</a></p>
                </div>
                <div id="historia" class = valilehti>
                    <!--firman lyhyt historiikki-->
                    <h2>Vähän meistä</h2>
                    <p>Latolan kukkakauppa syntyi Helsingin sydämessä kolmen puutarhaharrastajan toimesta
                      vuonna 1982. Myimme aluksi muista maista tilattuja kukkia, mutta nykyään
                      erikoistumme tuottamaan niitä luonnollisesti itse. Latolan toimipaikka on pysynyt
                      Bulevardi 31 kohdalla koko olemassaolonsa ajan. Tiloille tehtiin peruskorjausta 90-luvun lopulla,
                      jolloin liikkeen toiminta jouduttiin väliaikaisesti lopettamaan. Näihin aikoihin
                      avattiin Latolan verkkosivut, jonne yrityksen toiminta on tänä päivänä pääosin keskittynyt.</p>
                    <p>Yrityksen nimi Latola pohjautuu kolmen alkuperäisen perustajan etunimiin:
                      Lari, Topi ja Laila. Nimeä ei ole tarvinnut muuttaa, yrityksen siirtyessä
                      2000-luvulla perustajien lapsien, Laurin, Tommin ja Lauran omistukseen.</p>
                    <p>Osaamista ja taitoja eri kukkalajikkeiden luonnolliseen kasvattamiseen on
                      omistajilla kertynyt jo yli 15 vuoden edestä. Latola on toiminut vuosien varrella
                      merkittävissä tapahtumissa. Toimitimme kukat Linnan juhliin vuonna 2017 sekä
                      vuonna 2018 Yhdysvaltojen presidentti Donald Trumpin sekä Venäjän presidentti
                      Vladimir Putinin yhteiseen huippukokoukseen.</p>
                    <p>Latola on Helsingin alueen ainoa kukkakauppa, joka erikoistuu tuottamaan kaikki
                      kukkansa itse. Jokainen kukka on erityinen ja rakkaudella kasvatettu ainoastaan
                      luontaisia lannoitteita käyttäen. Puhdas ympäristö ja luonto ovat yrityksemme
                      kulmakiviä ja siksi osa yrityksemme tuotoista lahjoitetaan ilmastonmuutoksen
                      ehkäisemiseen.</p>
                    <h3>Auta meitä kasvattamaan parempi maailma, yksi kukka kerrallaan.</h3>
                </div>
                <div id="kukat" class = valilehti>
                    <!--galleria1-->
                    <div class ="imgrow">
                        <img src="kuvat/kuva1.jpg" class = pieni id="kuva1" alt="Pelargonia">
                        <img src="kuvat/kuva13.jpg" class = pieni id="kuva2" alt="Lilja">
                        <img src="kuvat/kuva3.jpg" class = pieni id="kuva3" alt="Malva">
                    </div>
                    <div class ="imgrow">
                        <img src="kuvat/kuva14.jpg" class = pieni id="kuva4" alt="Pelargonia">
                        <img src="kuvat/kuva5.jpg" class = pieni id="kuva5" alt="Syysmaitianen">
                        <img src="kuvat/kuva15.jpg" class = pieni id="kuva6" alt="Aitokanerva">
                    </div>
                </div>
                <div id="tiedot" class = valilehti>
                    <div id="kartta">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d248.1333205034142!2d24.9311221!3d60.1630769!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x46920bb57a615667%3A0xb5ff37ee59c94f19!2sBulevardi+31%2C+00180+Helsinki!3m2!1d60.1631043!2d24.9312589!5e0!3m2!1sen!2sfi!4v1538836065334"></iframe>
                    </div>
                    <!--yhteystiedot-->
                    <div id="yhttiedot">
                    <h3>Toimipiste</h3>
                    <p>Bulevardi 31</p>
                    <p>00180 Helsinki</p>
                    <h3>Aukioloajat:</h3>
                    <p>Arkisin: klo 10-18</p>
                    <p>Lauantaisin: klo 10-14</p>
                    <h3>Yhteystiedot</h3>
                    <p>puh: +358 123123</p>
                    <P><a href="mailto:kukka@kauppa.fi">kukka@kauppa.fi</a></P>
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
                    <li>Historiaa</li>
                    <li>Galleria</li>
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
