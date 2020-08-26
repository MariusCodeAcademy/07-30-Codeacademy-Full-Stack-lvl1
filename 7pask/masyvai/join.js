"use strict"
console.log('join.js');

let sakinys = 'siandien labai lijo lietus';

// paversti sakini i masyva kurio nariai yra atskiri
// zodziai 
let masyvasIsString = sakinys.split(' ');

console.log(masyvasIsString);

masyvasIsString.sort();
console.log('padarem sort');
console.log(masyvasIsString);

let naujasSakinys = masyvasIsString.join(' ');

console.log(naujasSakinys);


// Dom elementu itraukimo pavyzdys

// isitraukti visus li elemntus i masyva

let liElArr = document.querySelectorAll('.mainList li');

console.log(liElArr);

liElArr[2].innerHTML = 'pakeistas is masyvo';

liElArr[2].style.fontSize = '36px';