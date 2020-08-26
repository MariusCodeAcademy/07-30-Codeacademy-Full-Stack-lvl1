// kad parodyti klaidas kurios butu kitaip nutyletos
"use strict";
console.log('masyvai.js');


// sukurti nauja masyva
//                 0        1       2       3       4
const colors = ['green', 'blue', 'red', 'violet', 'brown'];
console.log(colors);

// masyvo elemento gavimas per indexa
// console.log(colors[1]);
// console.log(colors[3]);

// pakeisti red spalva i geltona 
// colors[2] = 'yellow';
// console.log(colors);

// colors = 'jonas'

// Masyvu savybes ir metodai 

// array.lengt - grazina masyvo dydi

console.log('masyvo dydis: ' + colors.length);

// gauti pask nari

let masyvoDydis = colors.length;

// console.log('pask narys: ' + colors[masyvoDydis - 1]);

// prideti masyvo nari su push()

colors.push('yellow');
console.log('masyvo dydis: ' + colors.length);
console.log(colors);

// shift() - pasalint pirma masyvo elementa
// issaugoti pirma nari kuri iskirpom kintamajame "Nukirptas"
let nukirptas = colors.shift();
console.log(colors);
console.log(nukirptas);

// pop() istrina paskutini masyvo elementa 
console.log('pop() istrina paskutini masyvo elementa');
colors.pop();
console.log(colors);

// dvieju masyvu sujunngimas concat()
//            0   1   2  3   
const arr1 = [5, 10, 13, 7];
const arr2 = [-15, 0, 12, -8];

const sujungtas = arr1.concat(arr2);

console.log(sujungtas);