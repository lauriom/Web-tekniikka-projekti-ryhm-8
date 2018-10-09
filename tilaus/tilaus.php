<?php
echo '<div class="valilehti" id="tilaa"></form>
<form class="tilaa" action="/tilaus/tilaus-inc.php" method="POST"> 
<div class="tilaavlehti1">
<div id="tilaa1">
<img src="kuvat/kuva1.jpg" class = kuvatilaa id="tkuva1" >
<p>Nimi:Pelargonia</p>
<p>Hinta:2e</p>
<input type="number" name="quantity1" min="0" max="99" placeholder="0">
</div>

<div id="tilaa2">
<img src="kuvat/kuva8.jpg" class = kuvatilaa id="tkuva2">
<p>Nimi:Orvokki</p>
<p>Hinta:8e</p>
<input type="number" name="quantity2" min="0" max="99" placeholder="0">

</div>
<div id="tilaa3">
<img src="kuvat/kuva3.jpg" class = kuvatilaa id="tkuva3">
<p>Nimi:Malva</p>
<p>Hinta:4e</p>
<input type="number" name="quantity3" min="0" max="99" placeholder="0">
</div>
</div>
<div class="tilaavlehti2">
<div id="tilaa4">
<img src="kuvat/kuva4.jpg" class = kuvatilaa id="tkuva4">
<p>Nimi:syysmatianen</p>
<p>Hinta:6e</p>
<input type="number" name="quantity4" min="0" max="99" placeholder="0">

</div>
<div id="tilaa5">
<img src="kuvat/kuva11.jpg" class = kuvatilaa id="tkuva5">
<p>Nimi:Lopelia</p>
<p>Hinta:12e</p>
<input type="number" name="quantity5" min="0" max="99" placeholder="0">

</div>
<div id="tilaa6">
<img src="kuvat/kuva6.jpg" class = kuvatilaa id="tkuva6">
<p>Nimi:Orvokki 2:</p>
<p>Hinta:3e</p>
<input type="number" name="quantity6" min="0" max="99" placeholder="0">

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