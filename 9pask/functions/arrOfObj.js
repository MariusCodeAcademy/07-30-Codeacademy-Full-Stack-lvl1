"use strict";
console.log('arr of obj .js');


//  asmenu kolekcija masyvas pilnas objektu

const persons = [{ // index 0
        name: 'bob',
        lastName: 'click',
        age: 25
    },
    { // index 1 
        name: 'tim',
        lastName: 'Brown',
        age: 52
    },
    { // index 2
        name: 'Jane',
        lastName: 'Dove',
        age: 25
    },
];

// gauti reiksme Brown 
console.log(persons[1].lastName);
console.log(persons[1]['lastName']);

// kintamasis kaip key
let myKey = 'age';
// gauti reiksme galime tik su [] skliausteliais 
persons[2][myKey]

console.log(persons[2][myKey]);

// atspausdinti 'Jane dove is xx years old '

console.log(persons.length);