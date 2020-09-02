"use strict";
console.log('acc');

// uzduotis kai paspausim ant h3 elemento, toliau esantis elementas 
// turetu gauti arba nuimti klase "open"

// uzdedame eventListeneri and accordion klases 

const accEl = document.querySelector('.accordion');
let clickeEl, isClass;
accEl.addEventListener('click', function(event) {



    clickeEl = event.target
        // console.log(clickeEl);
    isClass = clickeEl.classList.contains('title');
    // console.log(isClass);

    if (isClass) {
        // uzdaryti visus atidarytus acc
        removeOpen();
        clickeEl.nextElementSibling.classList.toggle('open');
    }




})

// sukurti funkcija kuri nuima open klase nuo visu text el

function removeOpen() {
    let textElArr = document.querySelectorAll('.text');
    // console.log(textElArr);

    textElArr.forEach(function(element) {
        element.classList.remove('open')
    })
}