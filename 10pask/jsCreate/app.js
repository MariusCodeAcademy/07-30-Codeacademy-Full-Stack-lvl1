"use strict";
console.log('app.js');

// valdomu elmentu itraukimas
const appEl = document.getElementById('app');

// html elementu sukurimas teisingu oficialiu budu

// 1 sukuriam elementa
let h2El = document.createElement('h2');

// 1a prideti el clase 
h2El.className = 'fancy';
// atnaujintas darbas su klasem 
h2El.classList.add('moreFancy');
h2El.classList.remove('moreFancy');
h2El.classList.toggle('moreFancy');
console.log(h2El.classList.contains('moreFancy'));

// h2El.className += ' whatt';



//2 sukurti textNode(text objekta)
let textNode = document.createTextNode('I was generated in a propper way');

// 3 texto priskyrimas prie sukurto elemento
h2El.appendChild(textNode);

// 4 sukurto el ikelimas i html
appEl.appendChild(h2El);


// =============================================================
// susikuriam mygtuka
let myBtn = document.createElement('button');
let btnTextNode = document.createTextNode('Toggle');
myBtn.appendChild(btnTextNode);

appEl.appendChild(myBtn);

// addEventlistener(koks eventas, funkcija kuri bus vygdoma) metodas 
myBtn.addEventListener('click', function() {
    // console.log('you have clicked a btn');
    // paspaudus prideti arba nuimti fancy clase nuo sugeneruoto h2
    h2El.classList.toggle('fancy');
})


// ==================================================
let liEl = document.createElement('li');
liEl.innerHTML = 'item 0 (prepend)';
let ulEl = document.getElementById('ul');
ulEl.prepend(liEl);

// ==========================================
// el.insertBefore(newEl, kurikelti) ikelimas i specifine vieta
let liEl2 = document.createElement('li');
liEl2.innerHTML = 'item Specific (inserBefore)';
ulEl.insertBefore(liEl2, ulEl.childNodes[5]);

// ================================================
// event objektas 
ulEl.addEventListener('click', function(event) {
    // console.log(event);
    // console.log(event.target);
    event.target.style.fontWeight = 'bold';
});