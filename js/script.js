/// scriptit tänne
'use strict';

///Välilehtien "linkit" alla
const linkit = document.getElementsByTagName('li');
const valilehdet = document.getElementsByClassName('valilehti');
const etusivu = linkit[0];
const palvelut = linkit[1];
const kukat = linkit[2];
const kukkakimput = linkit[3];
const yhteystiedot = linkit[4];
var viimeisin = linkit[0]; /*muuttuja tallentaa viimeisimmän välilehden vieritystä varten*/

///muuttaa näytettävän sivun osan näkyväksi <-nimetty kaikki välilehdet samaan classiin
function nayta(naytettava){
    for(let i = 0; i < valilehdet.length; i++){
        valilehdet[i].style.display = 'none';
    }
   valilehdet[naytettava].style.display = 'inline';
}

///funktio välilehden vierittämiselle näkyviin
}
function siirra(){ /*ei vielä toimivaa koodia*/
}


/// scriptit näkyvän divin vaihtamiseksi oikean palkin linkistä klikattuna alla,
/// kutsuu myös siirtäjää ja valitsee uuden välilehden taustalle siirrettäväksi
etusivu.addEventListener('click', function(){
    nayta(0);
    siirra();
    viimeisin = linkit[0];
});
palvelut.addEventListener('click', function(){
    nayta(1);
    siirra();
    viimeisin = linkit[1];
});
kukat.addEventListener('click',function(){
    nayta(2);
    siirra();
    viimeisin = linkit[2];
});
kukkakimput.addEventListener('click',function(){
    nayta(3);
    siirra();
    viimeisin = linkit[3];
});
yhteystiedot.addEventListener('click',function(){
    nayta(4);
    siirra();
    viimeisin = linkit[4];
});




