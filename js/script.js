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
const uusitili = linkit[5];
const kauppasivu = linkit[6];
var viimeisin = linkit[0]; /*muuttuja tallentaa viimeisimmän välilehden vieritystä varten*/

///muuttaa näytettävän sivun osan näkyväksi <-nimetty kaikki välilehdet samaan classiin
function nayta(naytettava){
    for(let i = 0; i < valilehdet.length; i++){
        valilehdet[i].style.display = 'none';
    }
    valilehdet[naytettava].style.display = 'inline';
    /*valilehdet[naytettava].style.width = '700px';*/

}

///funktio välilehden vierittämiselle näkyviin
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
    document.getElementById('tiedot').style.display = 'flex';
    document.getElementById('tiedot').style.flex = '50%';
    siirra();
    viimeisin = linkit[4];
});
uusitili.addEventListener('click',function(){
    nayta(5);
    document.getElementById('lomake').style.display = 'flex';
    document.getElementById('lomake').style.flex = '50%';
    siirra();
    viimeisin = linkit[5];
});
kauppasivu.addEventListener('click',function(){
    nayta(6);
    document.getElementById('kauppa').style.display = 'flex';
    document.getElementById('kauppa').style.flex = '50%';
    document.getElementById('kauppa').style.flexDirection = "column";

    siirra();
    viimeisin = linkit[6];
});
/*const kuva1 = document.getElementById('kuva1');
kuva1.addEventListener('mouseenter',function(){
    alert('Klikkaa mua');
});*/

/*const kuva1 = document.getElementById("kuva1"); <-Mahdollinen koodi kuvien suurentamiselle klikkaamalle vs. hover
kuva1.addEventListener('click', function(){
    kuva1.style.transform = 'scale(2.0)';
    kuva1.style.zIndex = '100';
    kuva1.addEventListener('click', function(){
        kuva1.style.transform = 'scale(1.0)';
        kuva1.style.zIndex = '0';
    })
})
*/
/*koodit ylävalikon toiminnallisuudelle*/
const ylaval1 = document.getElementById('valikko1');
ylaval1.addEventListener('click', function(){
    nayta(0);
    siirra();
    viimeisin = linkit[0];
});
const ylaval2 = document.getElementById('valikko2');
ylaval2.addEventListener('click', function(){
    nayta(1);
    siirra();
    viimeisin = linkit[1];
});
const ylaval3 = document.getElementById('valikko3');
ylaval3.addEventListener('click', function(){
    nayta(2);
    siirra();
    viimeisin = linkit[2];
});
const ylaval4 = document.getElementById('valikko4');
ylaval4.addEventListener('click', function(){
    nayta(3);
    siirra();
    viimeisin = linkit[3];
});
const ylaval5 = document.getElementById('valikko5');
ylaval5.addEventListener('click', function(){
    nayta(4);
    siirra();
    viimeisin = linkit[4];
});
const ylaval6 = document.getElementById('valikko6');
ylaval6.addEventListener('click', function(){
    nayta(5);
    siirra();
    viimeisin = linkit[5];
});



