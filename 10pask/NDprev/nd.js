"use strict";
console.log('nd.js');

const peopleArray = [{
        name: 'Serbentautas',
        surname: 'Bordiūras',
        age: 31
    },
    {
        name: 'Monitorė',
        surname: 'Vaizdinienė',
        age: 28
    },
    {
        name: 'Sandra',
        surname: 'Barantaitė',
        age: 32
    },
    {
        name: 'Velinas',
        surname: 'Dviratis',
        age: 25
    },
    {
        name: 'Vajetauskas',
        surname: 'Ištiktenis',
        age: 11
    },
    {
        name: 'Kęstas',
        surname: 'Paskęstas',
        age: 12
    },
    {
        name: 'Marytė',
        surname: 'Grėblytė',
        age: 44
    },
];

const peopleArray2 = [{
        name: 'Joch',
        surname: 'Doe',
        age: 31
    },
    {
        name: 'Loje',
        surname: 'Sou',
        age: 28
    }
]

// 4. sukurkite funkcija kuri ima 
//peopleArray kaip argumenta ir grazina 
// li elementus su 'vardas pavarde yra metai amziaus' reiksmemis

function arrayToLiList(myArr) {

    let generatedString = '';
    // forEach
    myArr.forEach(function(person) {
        // console.log('<li>' + person.name + ' ' + person.surname + ' yra ' + person.age + ' metu amžiaus. </li>');
        generatedString += '<li>' + person.name +
            ' ' + person.surname + ' yra ' + person.age +
            ' metu amžiaus. </li>';
    });

    // console.log(generatedString);

    return generatedString;

}

let generatedLis = arrayToLiList(peopleArray);

console.log(generatedLis);

document.getElementById('ul').innerHTML = generatedLis;

let generatedLis2 = arrayToLiList(peopleArray2);

document.getElementById('ul').innerHTML = generatedLis2;