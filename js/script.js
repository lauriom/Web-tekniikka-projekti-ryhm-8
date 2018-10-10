/*jshint esversion: 6 */
"use strict"; /* Käytetään koko scriptille, koska en tiedä, mitkä funktiot minun pitäisi käsitellä erikseen*/

///Välilehtien "linkit" alla
const linkit = document.getElementsByTagName("li");
const valilehdet = document.getElementsByClassName("valilehti");
const etusivu = linkit[0];
const palvelut = linkit[1];
const kukat = linkit[2];
const kukkakimput = linkit[3];
const yhteystiedot = linkit[4];
const uusitili = linkit[5];

///muuttaa näytettävän sivun osan näkyväksi <-nimetty kaikki välilehdet samaan classiin
function nayta(naytettava){
    for(let i = 0; i < valilehdet.length; i++){
        valilehdet[i].style.display = "none";
    }
    valilehdet[naytettava].style.display = "inline";
}

/// scriptit näkyvän divin vaihtamiseksi oikean palkin linkistä klikattuna alla
etusivu.addEventListener("click", function(){
    nayta(0);
});
palvelut.addEventListener("click", function(){
    nayta(1);
});
kukat.addEventListener("click",function(){
    nayta(2);
});
kukkakimput.addEventListener("click",function(){
    nayta(3);
});
yhteystiedot.addEventListener("click",function(){
    nayta(4);
    document.getElementById("tiedot").style.display = "flex";
    document.getElementById("tiedot").style.flex = "50%";
});
uusitili.addEventListener("click",function(){/*luo tili/kauppavälilehti, koodi vaatii vielä säätämistä, miten tehdään vaihto?*/
    nayta(5);
    try{
      document.getElementById("lomake").style.display = "flex";
      document.getElementById("lomake").style.flex = "50%";
    }catch(err){
      document.getElementById("tilaa").style.display = "inline-block";

    }
});

/*koodit ylävalikon toiminnallisuudelle*/
const ylaval1 = document.getElementById("valikko1");
ylaval1.addEventListener("click", function(){
    nayta(0);
});
const ylaval2 = document.getElementById("valikko2");
ylaval2.addEventListener("click", function(){
    nayta(1);
});
const ylaval3 = document.getElementById("valikko3");
ylaval3.addEventListener("click", function(){
    nayta(2);
});
const ylaval4 = document.getElementById("valikko4");
ylaval4.addEventListener("click", function(){
    nayta(3);
});
const ylaval5 = document.getElementById("valikko5");
ylaval5.addEventListener("click", function(){
    nayta(4);
});
const ylaval6 = document.getElementById("valikko6");
ylaval6.addEventListener("click", function(){
    nayta(5);
});
