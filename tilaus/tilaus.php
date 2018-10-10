<?php
echo '<div class="valilehti" id="tilaa"></form>
<form class="tilaa" action="http://users.metropolia.fi/~lauriom/3/tilaus/tilaus-inc.php" method="POST">
<div class="tilaavlehti1"> <!--tilaavlehti1-->
  <div id="tilaa1">
    <img src="kuvat/kuva1.jpg" class = kuvatilaa id="tkuva1" >
    <figcaption>
      <p>Pelargonia 2€</p>
    </figcaption>
    <input type="number" name="quantity1" min="0" max="99" placeholder="kpl" class="kpl">
  </div>

  <div id="tilaa2">
    <img src="kuvat/kuva8.jpg" class = kuvatilaa id="tkuva2">
    <figcaption>
      <p>Orvokki 8€</p>
    </figcaption>
    <input type="number" name="quantity2" min="0" max="99" placeholder="kpl" class="kpl">
  </div>

  <div id="tilaa3">
    <img src="kuvat/kuva3.jpg" class = kuvatilaa id="tkuva3">
    <figcaption>
      <p>Malva 4€</p>
    </figcaption>
    <input type="number" name="quantity3" min="0" max="99" placeholder="kpl" class="kpl">
  </div>

  <div class="tilaavlehti2">
    <div id="tilaa4">
      <img src="kuvat/kuva4.jpg" class = kuvatilaa id="tkuva4">
      <figcaption>
        <p>Syysmaitianen 6€</p>
      </figcaption>
      <input type="number" name="quantity4" min="0" max="99" placeholder="kpl" class="kpl">
    </div>

    <div id="tilaa5">
      <img src="kuvat/kuva11.jpg" class = kuvatilaa id="tkuva5">
      <figcaption>
        <p>Lopelia 12€</p>
      </figcaption>
      <input type="number" name="quantity5" min="0" max="99" placeholder="kpl"class="kpl">
    </div>

    <div id="tilaa6">
      <img src="kuvat/kuva6.jpg" class = kuvatilaa id="tkuva6">
      <figcaption>
        <p>Pelargonia 2: 3€</p>
      </figcaption>
      <input type="number" name="quantity6" min="0" max="99" placeholder="kpl" class="kpl">
    </div>
  </div>
</div>

<div id="bottomt">
<button type="submit" name="tilaa" id="tilaabutton">Lähetä tilaus</button>
</div>
</form>
</div>';
/**
 * Created by PhpStorm.
 * User: Lauri
 * Date: 07/10/2018
 * Time: 0.41
 */
