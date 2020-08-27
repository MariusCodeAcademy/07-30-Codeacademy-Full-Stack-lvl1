"use strict";
console.log('slice.js failas');

// suskuriam funkcija paprastesniam console.log
function sa(textas) {
    console.log(textas);
}

// Slice metodas
//                                       optional 
// arr.slice(IndexNuoKurPradedam, IndexIkiKurSustoti);
//                0         1      2      3           4
const colors = ['green', 'blue', 'red', 'violet', 'brown'];
sa(colors);

// issitraukti vidurinias tris reiksmes kaip nauja masyva
let vidurys = colors.slice(1, 4);

sa(vidurys);
sa(colors);

// norim gauti visas reiksmes iki galo nuo red spalvos

let galas = colors.slice(2);

sa(galas)