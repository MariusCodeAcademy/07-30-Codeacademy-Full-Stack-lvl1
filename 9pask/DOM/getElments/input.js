"use strict";
console.log('input');



// isitraukti reikalingus elemntus i js
const inputEl = document.getElementById('myInput');
const outputEl = document.getElementById('output');
const outputUL = document.getElementById('ulOutput');


function getTextAndOuput() {
    // isvesti tai ka ivedem i input lauka po rezultatas
    // paimti inputEl reiksme 
    let inputVal = inputEl.value;

    // pakeisti output elem innerHTML i inputEl reiksme
    outputEl.innerHTML = inputVal

}


// funkcija sukurti nauja elementa ir prideti i html
function createNewElmWithVal() {
    let inputVal = inputEl.value;
    outputUL.innerHTML += '<li class="liClass">' + inputVal + '</li>';
    inputEl.value = '';
}