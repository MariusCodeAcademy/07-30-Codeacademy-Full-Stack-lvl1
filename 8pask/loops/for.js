"use strict";
console.log('for.js');

// atspausdinti kiek yra sk 7 kartotiniu nuo 0 iki 100
// 7 % 7 = 0 tas skaicius yra kartotinis 

// sukurti tusia masyva 'kartotiniai'
let kartotiniai = [];
let count = 0;
for (let i = 0; i <= 100; i++) {
    // console.log(i);
    // patikrinti ar esamas sk liekana 7 yra 0
    if (i % 7 === 0) {
        // console.log(i);
        count++;
        // ideti kiekviena kartotini i masyva 
        // arr.push(reiksme)
        kartotiniai.push(i);
    }
}

// console.log('Nuo 0 iki 100 yra ' + count + ' 7 kartotiniu');
// console.log(`Nuo 0 iki 100 yra ${count} 7 kartotiniu`);

//  atspausdinti masyva 'kartotiniai'
// console.table(kartotiniai);


// 1. for  cikla kuris atspausdina visas reiksmes nuo 15 iki 42
// 2. atspausdinti visus skaicius su 'vnt.' 15vnt.
// 3. kiekviena reiksme padalinti is 3 ir atspausdinti