"use strict";
console.log('dom');

// pakeisti pagrindine antraste

// psiaudo kodas

// 1 nusitaikyti i elementa ir issisaugoti nusitaikyma kintamajame
const mainHeadingEl = document.getElementById('mainHeading');

// 2 ant sukurto kintamojo kuris rodo i elmenta mes
// atliekame reikiamus veikmus

//pakeisti i nauja
// mainHeadingEl.innerHTML = 'Pakeiciau antraste';

// darasyti kazka
mainHeadingEl.innerHTML += ' Pakeiciau antraste';

// pakeisti antrastes straipsnyje stiliu tiesiogiai
document.querySelector('article > h2').style.color = 'tomato';

// sukurti funkcija pakeisti text line height

function changeLineHeight() {
    // issisaugom elementa kintamajame
    const textEl = document.querySelector('.text');
    // atliekam veiksmus
    textEl.style.lineHeight = '1.5';
}

// changeLineHeight();


// pakeisti visus 3 li elementus 

// issisaugoti kinamajame
// modernus metodas
const liElementai = document.querySelectorAll('.mainList li');

console.log(liElementai);

// liElementai.style.color = 'red'

// for (let i = 0; i < liElementai.length; i++) {
//     liElementai[i].style.color = 'red'
//     liElementai[i].innerHTML = i + ' ' + liElementai[i].innerHTML;
// }

// foreach 
// masyvas                   el pav
liElementai.forEach(function(oneLi, index) {
    oneLi.style.color = 'red';
    oneLi.innerHTML = index + ' ' + oneLi.innerHTML;
});