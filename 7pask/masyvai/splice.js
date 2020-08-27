"use strict";
console.log('splice.js failas');

// suskuriam funkcija paprastesniam console.log
function sa(textas) {
    console.log(textas);
}

sa('bandymas naujo console.log');

// sukurti nauja masyva
let NaujasMas = [];
//                0        1       2       3       4
const colors = ['green', 'blue', 'red', 'violet', 'brown'];
sa(colors);

// arr.splice(indexNuoKurioPradedi, kiekElIstrini, naujasEl, NaujaEl);

// iterpti nauja elementa i index 3 vieta pavadinimu 'black'

colors.splice(3, 0, 'black', 'white');
sa('atlikome splice =========');
sa(colors);

// istrinti antra masyvo nari (index yra 1)

colors.splice(1, 1);
sa(colors);

// norim pakeisti spalva violet i purple
let istrintaSpalva = colors.splice(4, 1, 'purple');
sa(colors);