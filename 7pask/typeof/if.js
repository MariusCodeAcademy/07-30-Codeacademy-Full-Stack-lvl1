"use strict";
console.log('if.js');

// if else 

let num = 50;

// if (num > 200) {
//     // viskas bus vygdoma jei salyga yra true
//     console.log('salyga yra tiesa');
// } else {
//     // vygdoma jei if salyga yra netiesa (false)
//     console.log("salyga yra Netiesa");
// }


// parasyti programa kuri paklausia vartotjos amziaus
// ir patikrina ar jis pilametis ar ne 

// let vartotjoAmzius = prompt('koks yra jusu amzius');

// if (vartotjoAmzius >= 18) {
//     // amzius yra daugiau nei 17
//     console.log('galima testi apsipirkima');
// } else {
//     console.log('Atsiprasome bet jus negalite testi apsipirkimo');
// }


// Loginiai operatoriai && || 

// num = 0;

// patikrinti ar skaicius yra daugiau uz 15 IR maziau uz 30

// if (num > 15 && num < 30 && num > 0) {
//     console.log('skaicius yra daugiau uz 15 IR maziau uz 30');
// }

// patikrinti ar skaicius yra daugiau uz 15 ARBA maziau uz 30

// if (num > 15 || num < 30) {
//     console.log('skaicius yra daugiau uz 15 ARBA maziau uz 30');
// }



// If else if 

num = -30;

if (num > 0) {
    // jeigu true
    console.log('num yra daugiau uz 0');
} else if (num < -40) {
    console.log('num yra maziau uz -40');
} else {
    console.log('visi kiti atvejai');
}