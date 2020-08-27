"use strict";
console.log('paieska.js failas');

// suskuriam funkcija paprastesniam console.log
function cl(textas) {
    console.log(textas);
}

// Slice metodas
//                                       optional 
// arr.slice(IndexNuoKurPradedam, IndexIkiKurSustoti);
//                0         1      2      3           4
const colors = ['green', 'blue', 'red', 'violet', 'brown'];
cl(colors);

// issiaiskinti ar musu masyve colors yra spalva red (includes)

let isRed = colors.includes('red');

cl(isRed);

// issiaiskinti ar masyve yra spalva brown ir koks jos indexas 

let isBrown = colors.indexOf('brown');

cl(isBrown);

// panaudoti indexof gauti true arba false jei elementas yra masyve

let ats = colors.indexOf('blue1');

if (ats !== -1) {
    cl('radom')
} else {
    cl('neradom')
}